
pdfjsLib.GlobalWorkerOptions.workerSrc =
    'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

const pdfUrl = '/documents/MODUL%20PKM%20DIGIWISE.pdf';

const bookElement = document.getElementById('book');
const loadingElement = document.getElementById('readerLoading');
const counterElement = document.getElementById('pageCounter');
const currentPageElement = document.getElementById('currentPage');

let pdf = null;
let pageFlip = null;
let rendering = new Map();

async function renderPage(pageNumber) {
    const pageElement = bookElement.querySelector(
        `.page[data-page="${pageNumber}"]`
    );

    if (!pageElement || pageElement.dataset.rendered === 'true') {
        return;
    }

    if (rendering.has(pageNumber)) {
        return rendering.get(pageNumber);
    }

    const task = (async () => {
        const pdfPage = await pdf.getPage(pageNumber);
        const base = pdfPage.getViewport({ scale: 1 });

        const scale = Math.min(
            1.35,
            480 / base.width,
            650 / base.height
        );

        const viewport = pdfPage.getViewport({ scale });
        const canvas = document.createElement('canvas');
        const context = canvas.getContext('2d');

        canvas.width = Math.ceil(viewport.width);
        canvas.height = Math.ceil(viewport.height);

        pageElement.replaceChildren(canvas);

        await pdfPage.render({
            canvasContext: context,
            viewport
        }).promise;

        pageElement.dataset.rendered = 'true';
    })();

    rendering.set(pageNumber, task);

    try {
        await task;
    } finally {
        rendering.delete(pageNumber);
    }
}

async function renderNearbyPages() {
    const current = pageFlip.getCurrentPageIndex() + 1;

    const pages = [
        current - 1,
        current,
        current + 1,
        current + 2
    ].filter(number => number >= 1 && number <= pdf.numPages);

    await Promise.all(pages.map(renderPage));
}

function updatePage() {
    const current = pageFlip.getCurrentPageIndex() + 1;

    currentPageElement.textContent = current;
    counterElement.textContent =
        `Halaman ${current} dari ${pdf.numPages}`;

    document.getElementById('prevPage').disabled = current <= 1;
    document.getElementById('nextPage').disabled =
        current >= pdf.numPages;

    renderNearbyPages().catch(error => {
        console.error('Gagal merender halaman:', error);
    });
}

async function initReader() {
    try {
        loadingElement.textContent = 'Memuat dokumen PDF...';

        pdf = await pdfjsLib.getDocument({
            url: pdfUrl
        }).promise;

        // Siapkan elemen halaman tanpa merender seluruh PDF.
        const fragment = document.createDocumentFragment();

        for (let number = 1; number <= pdf.numPages; number++) {
            const page = document.createElement('div');

            page.className = 'page';
            page.dataset.page = number;
            page.textContent = 'Memuat halaman...';

            fragment.appendChild(page);
        }

        bookElement.appendChild(fragment);

        pageFlip = new St.PageFlip(bookElement, {
            width: 500,
            height: 680,
            size: 'stretch',
            minWidth: 280,
            maxWidth: 1000,
            minHeight: 380,
            maxHeight: 1360,
            showCover: true,
            usePortrait: true,
            drawShadow: true,
            flippingTime: 700,
            maxShadowOpacity: 0.35,
            mobileScrollSupport: false,
            startPage: 0,
            autoSize: true
        });

        pageFlip.loadFromHTML(
            bookElement.querySelectorAll('.page')
        );

        loadingElement.style.display = 'none';

        pageFlip.on('flip', updatePage);

        document.getElementById('prevPage').onclick = () => {
            pageFlip.flipPrev();
        };

        document.getElementById('nextPage').onclick = () => {
            pageFlip.flipNext();
        };

        document.getElementById('firstPage').onclick = () => {
            pageFlip.flip(0);
        };

        document.getElementById('lastPage').onclick = () => {
            pageFlip.flip(pdf.numPages - 1);
        };

        updatePage();

    } catch (error) {
        console.error('PDF reader error:', error);

        loadingElement.style.display = 'block';
        loadingElement.textContent =
            'Dokumen gagal dimuat. Periksa file PDF, koneksi internet, dan Console browser.';
    }
}

initReader();

pdfjsLib.GlobalWorkerOptions.workerSrc =
    'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

const pdfUrl = '/documents/MODUL%20PKM%20DIGIWISE.pdf';

pdfjsLib.getDocument(pdfUrl).promise
    .then(pdf => pdf.getPage(1))
    .then(page => {
        const canvas = document.getElementById('moduleCover');

        if (!canvas) return;

        const context = canvas.getContext('2d');
        const viewport = page.getViewport({ scale: 1.5 });

        canvas.width = viewport.width;
        canvas.height = viewport.height;

        return page.render({
            canvasContext: context,
            viewport: viewport
        }).promise;
    })
    .catch(error => {
        console.error('Cover PDF gagal dimuat:', error);
    });
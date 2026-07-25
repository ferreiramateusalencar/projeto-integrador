document.addEventListener('submit', function (event) {
    const form = event.target;

    if (!form.matches('form')) {
        return;
    }

    const deleteButton = event.submitter;

    if (deleteButton && deleteButton.textContent.trim().toLowerCase() === 'excluir') {
        const confirmed = window.confirm('Deseja realmente excluir este registro?');

        if (!confirmed) {
            event.preventDefault();
        }
    }
});

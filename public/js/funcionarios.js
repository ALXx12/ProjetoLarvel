console.log("entrando")
function demiteFuncionario(id, name) {
    Swal.fire({
        title: 'Tem certeza?',
        text: `Você está prestes a Demitir o funcionario ${name}.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sim, Demitir',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            axios.delete(`/funcionarios/${id}`)
                .then(() => {
                    Swal.fire(
                        'Excluído!',
                        'O funcionario foi demitido com sucesso.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                })
                .catch(() => {
                    Swal.fire(
                        'Erro!',
                        'Algo deu Errado.',
                        'error'
                    );
                });
        }
    });
}
const query = data => {
    let elementos = ''
    data.forEach(item => {
        elementos += `
        <article class="card">
            <div class="card-content">
                <h3>${item.name}</h3>
                <p>
                    <b>Nombre: </b>
                    ${item.}
                </p>
                <p>
                    <b>Precio: </b>
                    ${item.precie}
                </p>
            </div>
        </article>
        `
    });
    banderas.innerHTML = elementos
}
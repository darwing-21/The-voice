$(function () {
    let idactual;
    let totalaudiolibros = 0
    console.log('jQuery esta funcionando');
    actualizar();
    function actualizar() {
        $.ajax({
            url: '../php/lista_audio.php',
            type: 'GET',
            success: function (response) {
                let audiolibros = JSON.parse(response);
                totalaudiolibros = audiolibros.length;
                let template = '';
                audiolibros.forEach(audiolibro => {
                    template += `
                        <br><table class="container-musica" idMusica="${audiolibro.ID_AL}">
                            <tr>
                                <td class='id'>${audiolibro.ID_AL}</td>
                                <td class='plays'>
                                    <button class="lista">
                                        <img class="play" src="../img/play.png">
                                    </button>
                                </td>
                                <td class='nombre'>${audiolibro.NOMBRE_AL}</td>
                                <td class='autor'>${audiolibro.AUTOR_AL}</td>
                                <td class='genero'>${audiolibro.NARRADOR_AL}</td>
                                <td class='genero'>${audiolibro.CATEGORIA_AL}</td>
                            </tr>
                        </table><br>
                    `
                });
                $('#lista-musica').html(template);
            }
        })
    }

    $(document).on('click', '.lista', function () {
        let element = $(this)[0].parentElement.parentElement.parentElement.parentElement;
        let id = $(element).attr('idMusica')
        idactual = Number(id);
        play(id)
    })
    function siguiente() {
        console.log("holamundo")
        if (idactual === totalaudiolibros) {
            alert('ya no hay mas audiolibros para reproducir')
        }
        else {
            idactual = idactual + 1;
            play(idactual.toString())
        }

    }
    function anterior() {
        if (idactual === 1) {
            alert('no puede ir atras porque es la primera musica')
        }
        else {
            idactual = idactual - 1;
            play(idactual.toString())
        }


    }
    $(document).on('click', '.boton-siguiente', siguiente);
    $(document).on('click', '.boton-anterior', anterior);
    const aud = document.getElementById('audio-player')
    aud.addEventListener('ended', siguiente);
    const sourceAudio = document.getElementById("music-source")
    function play(id) {
        $.ajax({

            url: '../php/audiolibroid.php',
            type: 'POST',
            data: { id },
            success: function (response) {
                let enlace = JSON.parse(response);
                const player = document.getElementById('audio-player')
                let template1 = '';
                let template2 = '';
                let template3 = '';
                enlace.forEach(link => {
                    sourceAudio.setAttribute('src', `http://docs.google.com/uc?export=open&id=${link.ENLACE_AL}`)

                    template2 += `<h1 id="nombreM">${link.NOMBRE_AL}</h1>`
                    template3 += `<h3 id="nombreM">${link.AUTOR_AL}</h3>`
                }
                );

                $('#nombreM').html(template2);
                $('#nombreA').html(template3);
                player.load()

            }
        })
    }
})
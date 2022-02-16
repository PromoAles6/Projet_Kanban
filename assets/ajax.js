
        $('.add-list').submit(function(event){
                event.preventDefault();
                $.ajax({
                        url: '?page=tableau',
                        data: {
                                name: $('#title_list').val()
                        },
                        type: "POST" 
                        
                }).done(function(response) {
                        
                        $('.container-list').append('<div class="list"><h2>' + $('input[name="title_list"]').val() + '</h2>  <button type="button" class="btn" id="addCard" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="@mdo">+ Ajouter une carte</button></div>');
                        console.log(response)
                });
                

        });

        $('.add-card').submit(function(event){
                event.preventDefault();
                $('.myCards').append('<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal" data-bs-whatever="@mdo">' + $('input[name="title_card"]').val()  + '</button>');
        })
        
        /* 

        $( function() {
                $( "#draggable" ).draggable();
        } ); */
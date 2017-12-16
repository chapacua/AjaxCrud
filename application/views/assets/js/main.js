    //Crea datos y consulta la info para la tabla

    $("#saveForm").submit(function(){
        event.preventDefault();
        $.ajax({
            url: $(this).attr("action"),
            type: $(this).attr("method"),
            data: $(this).serialize(),
            beforeSend: function(){
               $("#sendButton").addClass("is-loading");
            },
            success: function(data)
            {   
                $("#table").empty(); 
                var JSONObject = JSON.parse(data);     
                for (var i = 0; i < JSONObject.length; i++) 
                    {     
                        var estado;
                        if (JSONObject[i].estado == "1") {
                            estado = "Activo";
                        }else{
                            estado = "Inactivo";
                        }
                        $("#table").after
                        (
                            "<tr id="+JSONObject[i].id+">"+
                                "<td>"+JSONObject[i].id+"</td>"+
                                "<td>"+JSONObject[i].apellido+"</td>"+
                                "<td>"+JSONObject[i].email+"</td>"+
                                "<td>"+estado+"</td>"+
                                "<td>"+JSONObject[i].fecha  +"</td>"+
                                "<td><button onclick='deleteData("+JSONObject[i].id+")' class='button is-danger is-outlined' ><span class='icon is-small'><i class='fa fa-times'></i></span></button></td>"+

                            "</tr>"                      
                        );
                    }          
            },
            complete: function(){
                $("#sendButton").removeClass("is-loading");
            }
        });
    });  

    function deleteData(id) {
        event.preventDefault();
        $.ajax({
            url: base_url+"Controller/delete/"+id,
            type: 'GET',
            beforeSend: function(){
               $("#"+id).addClass("is-loading");
            },
            success: function(data)
            {
               $('#'+id).remove(); 
            },
            complete: function(){
                $("#"+id).removeClass("is-loading");
            }
        });
     } 
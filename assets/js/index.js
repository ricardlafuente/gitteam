$(function () {
    $("#fecha").datepicker({dateFormat: 'yy-mm-dd'});


    function modificarEmpleado() {
        $(".modificar_empl").each(function (i) {
            $(this).click(function (event) {
                event.preventDefault();

                tds = $(this).parent().parent().find("td");

                $(tds).each(function (j) {
                    if (j !== 0 && j !== $(tds).length - 1) { //Cambiar por textareas
                        contenido = $(this).html();
                        if (j == 1) {
                            $(this).html("<input id='fechaEmpleado' type='text' value='" + contenido + "' style='width:90px;'>");
                            $("#fechaEmpleado").datepicker({dateFormat: 'yy-mm-dd'});
                        } else if (j == 5) {
                            $(this).html("<input id='fechaEmpleadoC' type='text' value='" + contenido + "' style='width:90px;'>");
                            $("#fechaEmpleadoC").datepicker({dateFormat: 'yy-mm-dd'});
                        } else {
                            $(this).html("<input type='text' value='" + contenido + "' style='width:70px;'>");
                        }


                    } else {
                        if (j === $(tds).length - 1) { //Cambiar icono
                            boton = $(this).find("button");

                            $(boton).each(function (r) {
                                if (r === 1) {
                                    spans = $(this).find("span");

                                    $(spans).removeClass("glyphicon glyphicon-pencil");
                                    $(spans).attr("class", "glyphicon glyphicon-ok");

                                    $(this).parent().unbind("click"); //Quitamos click

                                    $(this).parent().click(function (eventos) { //Buscamos la A padre del button.
                                        eventos.preventDefault();

                                        console.log($(this).parent().parent().find(".emp_no").html());
                                        
                                        //Ajax
                                        $.ajax({
                                            url: 'Empresa/modificarEmpleado',
                                            type: "POST",
                                            data: {
                                                emp_no: $(this).parent().parent().find(".emp_no").html(),
                                                birth_date: $(this).parent().parent().find(".birth_date").html(),
                                                first_name: $(this).parent().parent().find(".first_name").html(),
                                                last_name: $(this).parent().parent().find(".last_name").html(),
                                                gender: $(this).parent().parent().find(".gender").html(),
                                                dept_name: $(this).parent().parent().find(".dept_name").html(),
                                                salary: $(this).parent().parent().find(".salary").html(),
                                                title: $(this).parent().parent().find(".title").html()
                                            },
                                            success: function (data) {
                                                console.log(data);
                                            },
                                            error: function (err) {
                                                console.log(err);
                                            }
                                        });


                                        $(spans).removeClass("glyphicon glyphicon-ok");
                                        $(spans).attr("class", "glyphicon glyphicon-pencil");

                                        modificarEmpleado();

                                    });
                                }
                            });

                        }
                    }
                });
            });
        });
    }
    ;
    modificarEmpleado();
});

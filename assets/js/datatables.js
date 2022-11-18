
	    let tabla = document.querySelector('#tableListaDeseo');
	
        let dataTable = new DataTable(tabla,{
            perPage:5,
            perPageSelect:[5,10,15,20],
            labels: {
            placeholder: "Buscar:",
            perPage: "{select} Registros por pagina",
            noRows: "Registro no Encontrado",
            info: "Mostrando registros del {start} al {end} de {rows} Registros"}
        });
    

        // !! EL CONSUMO DE LA BASE DE DATOS DEBE SER POR MEDIO DE PHP O AJAX PARA QUE DATATABLES PUEDE MOSTRAR LOS RESULTADOS Y HACERLO DINAMICO
        // $(document).ready(function () {
        //     $.noConflict();
        //     var table = $('#tableListaDeseo').DataTable({
        //         perPage:5,
        //         perPageSelect:[5,10,15,20],
        //         labels: {
        //         placeholder: "Buscar:",
        //         perPage: "{select} Registros por pagina",
        //         noRows: "Registro no Encontrado",
        //         info: "Mostrando registros del {start} al {end} de {rows} Registros"}
        //     });
        // });

        // $(document).ready(function() {    
        //     $('#tableListaDeseo').DataTable({        
        //         language: {
        //                 "lengthMenu": "Mostrar _MENU_ registros",
        //                 "zeroRecords": "No se encontraron resultados",
        //                 "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        //                 "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        //                 "infoFiltered": "(filtrado de un total de _MAX_ registros)",
        //                 "sSearch": "Buscar:",
        //                 "oPaginate": {
        //                     "sFirst": "Primero",
        //                     "sLast":"Último",
        //                     "sNext":"Siguiente",
        //                     "sPrevious": "Anterior"
        //                  },
        //                  "sProcessing":"Procesando...",
        //             },
        //         //para usar los botones   
        //         responsive: "true",
        //         dom: 'Bfrtilp',       
        //         buttons:[ 
        //             {
        //                 extend:    'excelHtml5',
        //                 text:      '<i class="fas fa-file-excel"></i> ',
        //                 titleAttr: 'Exportar a Excel',
        //                 className: 'btn btn-success'
        //             },
        //             {
        //                 extend:    'pdfHtml5',
        //                 text:      '<i class="fas fa-file-pdf"></i> ',
        //                 titleAttr: 'Exportar a PDF',
        //                 className: 'btn btn-danger'
        //             },
        //             {
        //                 extend:    'print',
        //                 text:      '<i class="fa fa-print"></i> ',
        //                 titleAttr: 'Imprimir',
        //                 className: 'btn btn-info'
        //             },
        //         ]	        
        //     });     
        // });
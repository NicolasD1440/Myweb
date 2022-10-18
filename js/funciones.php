<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>       
<body style="background-color: black">
    

        <?php 
        session_start();
        if (isset($_SESSION["usuario"])) {
            if (isset($_SESSION["carrito"])) {
                header("location: ../pedidos/pedidos.php");
            }else{
                
            
         ?>
        <script>
                Swal.fire({
                title: 'ERROR',
                text: "El carrito esta vacio selecciona un plato",
                icon: 'error',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Volver',
                }).then((result) => {
                if (result.isConfirmed) {
                  
                        window.location.href = ('../index.php')
                  
                }
                })
            </script>
         <?php
         }}else {
            header("location: ../login/Login.php");
        }
        ?>
        
</body>
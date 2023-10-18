<script src="assets/js/jquery-3.6.1.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/custom.js"></script>

   <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

      <script>
          alertify.set('notifier','position', 'top-left');

        <?php 
        
        if(isset($_SESSION['message'])) { ?>
          alertify.success('<?=$_SESSION['message']; ?>');
          <?php 
            unset($_SESSION['message']);
          } ?>

      </script>
      <script>
                   function openCart(){
      document.getElementById("cart").style.display = "block";
    }
    document.addEventListener('mouseup', function(e){
      var container = document.getElementById('cart');
      if(!container.contains(e.target)){
        container.style.display ='none';
      }
    });
    function closeCart(){
      document.getElementById("cart").style.display = "none";
    }
    function openLogin(){
      document.getElementById("login").style.display = "block";
    }
    function closeLogin(){
      document.getElementById("login").style.display = "none";
    }
    document.addEventListener('mouseup', function(e){
      var container = document.getElementById('login');
      if(!container.contains(e.target)){
        container.style.display ='none';
      }
    });
      </script>
     
  </body>
</html>
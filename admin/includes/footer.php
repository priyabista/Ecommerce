<footer class="footer pt-5">
   
 </footer>
</main>
<script src="assets/js/jquery-3.6.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min"></script>
<script src="assets/js/perfect-scrollbar.min.js"></script>
  <script src="assets/js/smooth-scrollbar.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script src="assets/js/custom.js"></script>


<!-- alretify js -->
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

      <script>
        <?php if(isset($_SESSION['message'])) { ?>
          alertify.set('notifier','position', 'top-right');
          alertify.success('<?=$_SESSION['message']; ?>');
          <?php 
            unset($_SESSION['message']);
          } ?>
      </script>
</body>

</html>
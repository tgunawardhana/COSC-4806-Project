<br>
<br>
<div class="border-top mb-3 border-primary-dark border-2"> </div>
<footer class="footer">
    <div class="row">
        <div class="col text-start">
            <p>Copyright &copy; <?php echo date('Y'); ?> </p>
        </div>

        <div class="col-6 text-center">
                <p>COSC 4806 Assignment</p>
                <p>Thedini Gunawardhana</p>
        </div>

        <div class="col text-end">
            <? if (isset($_SESSION['auth']) && $_SESSION['auth'] == 1) { ?>
                <p> <a href="/logout">Logout</a></p>
            <?php  } ?>
                
        </div>
    </div>
</footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
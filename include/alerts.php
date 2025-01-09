<?php if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Great!</strong> <?php echo $_SESSION['success'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php unset($_SESSION['success']);
} ?>

<?php if (isset($_SESSION['error'])){ ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Oops!</strong> <?php echo $_SESSION['error'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php unset($_SESSION['error']); 
} ?>


<script>
        setTimeout(() => {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
</script>
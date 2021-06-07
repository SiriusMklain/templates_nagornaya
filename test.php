<?php include_once('inc/header.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="container pt-5">
    <div class="one__buttons">
        <a href="#" class="btn btn-primary">1</a><a href="#" class="btn btn-primary">2</a><a href="#" class="btn btn-primary">3</a>
    </div>


    <div class="constructor pt-5">
        <ul>
            <li><input type="checkbox"></li>
            <li><input type="checkbox"></li>
            <li><input type="checkbox"></li>
            <li><input type="checkbox"></li>
            <li><input type="checkbox"></li>
        </ul>
    </div>
</div>

<script>

    if($('div').is('.constructor')) {
        $('.one__buttons').remove()
    } else {
        console.log('none');
    }
</script>


<?php include_once('inc/footer.php') ?>

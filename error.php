<?php if (count($errors) > 0): ?>
    <div class="error">
        <?php foreach ($errors as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<style>
.error {
    background-color: #f8d7da;
    border: 1px solid #f5c6cb; 
    color: #721c24; 
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 15px;
    font-size: 16px;
    font-weight: bold;
    text-align: center;
}

.error p {
    margin: 5px 0;
}
</style>
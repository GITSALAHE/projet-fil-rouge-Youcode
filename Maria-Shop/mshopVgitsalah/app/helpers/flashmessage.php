<?php
if (isset($_POST['addCategory'])) {
    if (count($errors) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>

<?php
if (isset($_POST['editCategory'])) {
    if (count($errorsEdit) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errorsEdit as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>

<?php
if (isset($_POST['addProduct'])) {
    if (count($errorsProduct) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errorsProduct as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>


<?php
if (isset($_POST['editProduct'])) {
    if (count($errorsEditProduct) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errorsEditProduct as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>

<?php
if (isset($_POST['addSize'])) {
    if (count($errorAddSize) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errorAddSize as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>

<?php
if (isset($_POST['editSize'])) {
    if (count($errorsEdit) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errorsEdit as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>

<?php
if (isset($_POST['register'])) {
    if (count($errorRegister) > 0) : ?>

        <div class="alert alert-danger">
            <?php foreach ($errorRegister as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
<?php endif;
} ?>
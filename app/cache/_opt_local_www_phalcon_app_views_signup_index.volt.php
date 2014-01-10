<h1>Registration</h1>

<?php echo $this->tag->linkTo(array('/', 'Home')); ?>,

<?php echo $this->tag->linkTo(array('signin', 'Sign In')); ?>

<?php echo $this->tag->form(array('signup/reg', 'method' => 'post')); ?>
    <p>
        <label for="first_name">First Name</label>
        <?php echo $this->tag->textField(array('first_name', array('maxlength' => 30, 'placeholder' => 'First Name'))); ?>
    </p>
    <p>
        <label for="last_name">Last Name</label>
        <?php echo $this->tag->textField(array('last_name', array('maxlength' => 30, 'placeholder' => 'Last Name'))); ?>
    </p>
    <p>
        <label for="email">Email</label>
        <?php echo $this->tag->textField(array('email')); ?>
    </p>

    <p>
        <label>Sex</label>
		<?php echo $this->tag->select(array('sex', array('m' => 'male', 'f' => 'female'))); ?>
    </p>

    <p>
        <label>Comment</label>
        <?php echo $this->tag->textArea(array('comment')); ?>
    </p>

    <p>
        <label for="password">Password</label>
        <?php echo $this->tag->textField(array('password')); ?>
    </p>
    <p>
        <label for="re-pass">Re Password</label>
        <?php echo $this->tag->passwordField(array('re-pass')); ?>
    </p>
    <?php echo $this->tag->submitButton(array('Sign Up')); ?>
    <?php echo $this->tag->hiddenField(array('invite', 'value' => $invite)); ?>

<?php echo $this->tag->endForm(); ?>

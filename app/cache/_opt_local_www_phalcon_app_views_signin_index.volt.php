<h1>Registration</h1>

<?php echo $this->tag->linkTo(array('/', 'Home')); ?>,

<?php echo $this->tag->linkTo(array('signup', 'Sign Up')); ?>


<?php echo $this->tag->form(array('signin/login', 'method' => 'post')); ?>
	<p>
		<label for="email">Email</label>
		<?php echo $this->tag->textField(array('email')); ?>
	</p>

	<p>
		<label for="password">Password</label>
		<?php echo $this->tag->passwordField(array('password')); ?>
	</p>
	<?php echo $this->tag->submitButton(array('Sign Up')); ?>
</form>

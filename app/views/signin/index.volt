<h1>Registration</h1>

{{ link_to("/", "Home") }},

{{ link_to("signup", "Sign Up") }}


{{ form("signin/login", "method": "post") }}
	<p>
		<label for="email">Email</label>
		{{ text_field('email') }}
	</p>

	<p>
		<label for="password">Password</label>
		{{ password_field('password') }}
	</p>
	{{ submit_button("Sign Up") }}
</form>

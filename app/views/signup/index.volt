<h1>Registration</h1>

{{ link_to("/", "Home") }},

{{ link_to("signin", "Sign In") }}

{{ form("signup/reg", "method": "post") }}
    <p>
        <label for="first_name">First Name</label>
        {{ text_field('first_name', ['maxlength':30, 'placeholder':'First Name']) }}
    </p>
    <p>
        <label for="last_name">Last Name</label>
        {{ text_field('last_name', ['maxlength':30, 'placeholder':'Last Name']) }}
    </p>
    <p>
        <label for="email">Email</label>
        {{ text_field('email') }}
    </p>

    <p>
        <label>Sex</label>
		{{ select('sex', ['m': 'male', 'f': 'female']) }}
    </p>

    <p>
        <label>Comment</label>
        {{ text_area('comment') }}
    </p>

    <p>
        <label for="password">Password</label>
        {{ text_field('password') }}
    </p>
    <p>
        <label for="re-pass">Re Password</label>
        {{ password_field('re-pass') }}
    </p>
    {{ submit_button("Sign Up") }}
    {{ hidden_field('invite', 'value': invite) }}

{{ end_form() }}

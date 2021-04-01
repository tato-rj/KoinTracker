@fa(['icon' => 'envelope'])<strong>Thanks for signing up!</strong> Before you can add your first transaction, please confirm your email. Get a new link
<a href="" onclick="event.preventDefault(); document.getElementById('verification-form').submit();">
	<form id="verification-form" action="{{ route('verification.send') }}" method="POST" style="display: none;">@csrf</form>here
</a>.
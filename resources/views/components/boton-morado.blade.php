@props(['href' => '#'])
@props(['type' => 'button'])

@if($type === 'submit')
    <button type="submit" {{ $attributes->merge(['class' => 'btn btn-morado']) }}>
        {{ $slot }}
    </button>
@else
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn btn-morado']) }}>
        {{ $slot }}
    </a>
@endif

<style>
.btn-morado {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #8e6ac1;
	background-image: -moz-linear-gradient(top, #a884d6, #7c58b0);
	background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#a884d6), to(#7c58b0));
	background-image: -webkit-linear-gradient(top, #a884d6, #7c58b0);
	background-image: -o-linear-gradient(top, #a884d6, #7c58b0);
	background-image: linear-gradient(to bottom, #a884d6, #7c58b0);
	background-repeat: repeat-x;
	border-color: #7c58b0 #7c58b0 #5c3f85;
}
.btn {
	display: inline-block;
	padding: 4px 12px;
	margin-bottom: 0;
	font-size: 13px;
	line-height: 16px;
	text-align: center;
	vertical-align: middle;
	cursor: pointer;
	border-radius: 4px;
    border: 1px solid transparent;
	box-shadow: inset 0 1px 0 rgba(255, 255, 255, .2), 0 1px 2px rgba(0, 0, 0, .05);
}


.btn-morado:hover,
.btn-morado:focus,
.btn-morado:active,
.btn-morado.active,
.btn-morado.disabled,
.btn-morado[disabled] {
    color: #ffffff;
    background-color: #7c58b0;
}

.btn:hover, .btn:focus {
	text-decoration: none;
	background-position: 0 -15px;
	-webkit-transition: background-position 0.1s linear;
	transition: background-position 0.1s linear;

}
</style>

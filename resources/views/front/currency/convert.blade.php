@php($desired_currency_id = Session::get("currency_id"))
@php($desired_currency_price = Session::get("currency_price"))
@php($desired_currency_sign = Session::get("currency_sign"))

@php($semi_converted = $money * $currency_price)

@php($fully_converted = $semi_converted / $desired_currency_price)

{{ $fully_converted }} {{ $desired_currency_sign }}
@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection
@section('content')
<div class="confirm__content">
    <div class="confirm__heading">
        <h1>Confirm</h1>
    </div>
    <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $contact['last_name'] }} {{ $contact['first_name'] }}
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}" />
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        <?php
                        switch ($contact['gender']) {
                            case "1":
                                echo "男性";
                                break;
                            case "2":
                                echo "女性";
                                break;
                            case "3":
                                echo "その他";
                                break;
                        }
                        ?>
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $contact['email'] }}
                        <input type="hidden" name="email" value="{{ $contact['email'] }}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $contact['tell-first']}}{{ $contact['tell-second']}}{{ $contact['tell-third']}}
                        <input type="hidden" name="tell" value="{{ $contact['tell-first']}}{{ $contact['tell-second']}}{{ $contact['tell-third']}}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $contact['address'] }}
                        <input type="hidden" name="address" value="{{ $contact['address'] }}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $contact['building'] }}
                        <input type="hidden" name="building" value="{{ $contact['building'] }}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $category['content'] }}
                        <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}" />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__text">
                        {{ $contact['detail'] }}
                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}" />
                    </td>
                </tr>
            </table>
        </div>
        <div class=" button__area">
            <button class="common-button" type="submit">送信</button>
            <button class="confirm-button" type="submit" name="back" value="back">修正</button>
        </div>
    </form>
</div>
@endsection
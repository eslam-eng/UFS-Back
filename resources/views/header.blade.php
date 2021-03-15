@php
    $company = App\Models\Company::admin();
@endphp

<div class="w3-block w3-round" style="border: 2px dashed gray;padding: 5px" >
    <table class="w3-table">
        <tr style="text-align: right" >
            <td style="width: 100px" >
                <img src="{{ url('/logo.png') }}" width="100px" >
            </td>
            <td  style="text-align: right" >
                <b>{{ optional($company)->name }}</b> <br>
                {{ optional($company)->address }} <br>
                {{ optional(optional($company)->city)->name }} <br>
                {{ optional(optional($company)->area)->name }} <br>
                ت: {{ optional($company)->phone }} <br>
            </td>
        </tr>
    </table>
</div>

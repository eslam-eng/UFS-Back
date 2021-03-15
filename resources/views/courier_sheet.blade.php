@extends("master")


@section("content")
<br>
        <div class="w3-center w3-large">
            <b>Daily Report Sheet</b>
        </div>
        <table class="w3-table">
            <tr>
                <td>
                   رقم الشيت : {{ $resource->id }}
                </td>
                <td>
                   التاريخ : {{ $resource->date }}
                </td>
                <td>
                   اسم المندوب : {{ optional($resource->courier)->name }}
                </td>
            </tr>
        </table>
        <br>
        <table class="w3-table w3-bordered">
            <tr class="w3-light-gray" >
                <th>م</th>
                <th>رقم البوليصة</th>
                <th>اسم المرسل اليه</th>
                <th>العنوان</th>
                <th>المنطقة</th>
                <th>رقم التلفون</th>
                <th>اسم الراسل</th>
                <th>المبلغ</th>
                <th>الحالة</th>
                <th>ملاحظات</th>
            </tr>

            @foreach($resource->sheetDetails()->get() as $item)
            <tr>
                <td>{{ $loop->iteration + 1 }}</td>
                <td>{{ optional($item->awb)->code }}</td>
                <td>{{ optional(optional($item->awb)->receiver)->name }}</td>
                <td>{{ optional(optional($item->awb)->branch)->address }}</td>
                <td>{{ optional(optional($item->awb)->area)->name }}</td>
                <td>{{ optional(optional($item->awb)->branch)->phone }}</td>
                <td>{{ optional(optional($item->awb)->company)->name }}</td>
                <td>{{ optional($item->awb)->collection }}</td>
                <td>{{ optional(optional($item->awb)->status)->name }}</td>
                <td>{{ optional($item->awb)->notes }}</td>
            </tr>
            @endforeach
        </table>
        <br>
        <table class="w3-table text-center w3-large">
            <tr>
                <td class="w3-large" >
                    <b> توقيع المندوب</b>
                    <br>
                    <div class="w3-block" style="border: 2px dashed gray" ></div>
                </td>
                <td class="w3-large" >
                    <b>operation manager</b>
                    <br>
                    <div class="w3-block" style="border: 2px dashed gray" ></div>
                </td>
                <td class="w3-large" >
                   <b> توقيع المحاسب</b>
                    <br>
                    <div class="w3-block" style="border: 2px dashed gray" ></div>
                </td>
            </tr>
        </table>
@endsection


{{-- Parameter enter: $data, $parentId, $note and $currentItem in edit form --}}


@foreach ($data as $item)
    @if($item->parentId == $parentId)
        <tr class="">
            <td class="colCheckbox">
                <input id="1" class="cb orderCb" type="checkbox">
            </td>
            <td>
                <span data-toggle="tooltip" data-title="parentId: ">{{ $item->id }}</span>
            </td>
            <td>{{ $item->companyId }}</td>
            <td>{{ $item->departmentId }}</td>
            <td style="padding-left: 10px;">
                <a href="https://erp.nhanh.vn/document/document/index?name=&amp;companyId=1&amp;itemId=1&amp;submit=L%E1%BB%8Dc">
                    {!! $note !!}{{ $item->name }}
                </a>
            </td>
            <td>13</td>
            <td class="colControls">
                <div class="dropdown">
                    <a class="fa fa-cogs fa-lg dropdown-toggle" data-toggle="dropdown"></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="https://erp.nhanh.vn/document/category/edit?id=1">
                                <i class="fa fa-edit" style="margin-right:7px;margin-left:2px"></i>
                                Sửa danh mục
                            </a>
                        </li>
                        <li>
                            <a href="https://erp.nhanh.vn/document/category/index#" class="deleteCat" value="1">
                                <i class="fa fa-trash-o" style="margin-right:8px"></i>
                                Xoá danh mục
                            </a>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @include('document::pages.category.include._inc_recursiveList',[
            'data' => $data,
            'parentId' =>$item->id,
            'note' => $note."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",
        ])
    @endif
@endforeach
<table class="table table-striped table-bordered zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th>Profile Image</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($getusers as $users) {
        ?>
        <tr id="dataid{{$users->id}}">
            <td>{{$users->id}}</td>
            <td><img src='{!! asset("public/images/profile/".$users->profile_image) !!}' style="width: 100px;"></td>
            <td>{{$users->name}}</td>
            <td>{{$users->email}}</td>
            <td>{{$users->mobile}}</td>
            <td>{{$users->created_at}}</td>
            <td>
                @if($users->is_available == '1')
                    <a class="badge badge-info px-2" onclick="StatusUpdate('{{$users->id}}','2')" style="color: #fff;">Block</a>
                @else
                    <a class="badge badge-primary px-2" onclick="StatusUpdate('{{$users->id}}','1')" style="color: #fff;">Unblock</a>
                @endif
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
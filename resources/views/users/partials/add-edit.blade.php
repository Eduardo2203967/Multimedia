
<div class="form-group">
    <label for="inputFullname">Name</label>
    <input type="text" class="form-control" name="name"
    id="inputFullname" value="{{old('name',$user->name)}}" />
</div>

<div class="form-group">
    <label for="inputEmail">Email</label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="exemplo@gmail.com"
        value="{{old('email',$user->email)}}" />
</div>

<div class="form-group">
    <label for="inputPhoto">Photo</label>
    <input type="file" class="form-control-file" name="photo" id="inputPhoto" aria-describedby="fileHelp" />
    <small id="fileHelp" class="form-text text-muted"> Please upload a valid file image. Size of image should not be
        more than 2MB </small>
</div>

@can("updateRole",$user)
<div class="form-group">
    <label for="inputRole">Role</label>
    <select name="role" id="inputRole" class="form-control">
        <option {{old('role',$user->role)=='A'?"selected":""}} value="A" >Admin</option>
        <option {{old('role',$user->role)=='N'?"selected":""}} value="N" selected>Staff</option>

    </select>
</div>
@endcan

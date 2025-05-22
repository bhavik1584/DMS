<div class="row">
    @foreach ($props['folders'] as $folder)
        <div class="col-1">
            <x-dms.folder :props="['folder'=>$folder]"/> 
        </div>  
    @endforeach
</div>
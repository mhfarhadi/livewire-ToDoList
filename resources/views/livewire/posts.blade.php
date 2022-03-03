<div dir="rtl" class="main_div">

    <style>

    </style>
    <?php dd($allPosts) ?>
    


    <div class="container border_box py-3">
        <h1 class="text-center mt-3">عنوان صفحه</h1>
        <div class="action_content mt-2">
            <button class="btn btn-success mx-1">add</button>
            <input type="text" class="form-control-mx-1" placeholder="title" wire:model="title">
        </div>
        <textarea placeholder="متن پیام" class="form-control mt-1" wire:model="content"></textarea>
        <ul>
            @foreach ($allPosts as $post)
            <li>
                <h3 class="text-right">{{$posts->title}}</h3>
                <p class="text-right">
                    {{$posts->content}}
                </p>
            </li>
            @endforeach
            
        </ul>
    </div>
</div>

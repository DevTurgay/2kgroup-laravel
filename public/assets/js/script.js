$('body').on('click','.removeBetItem',function(){
    if(!confirm('Are you sure ?'))
        return false;
    let currItem = $(this);
    let id = currItem.data('id');
    $.ajax({
        url:'/bet/'+id,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        method:'delete'
    }).done(function(response){
        alert(response.status == '1' ? 'Item deleted' : 'Something went wrong');
        currItem.parents('tr').fadeOut(300);
    }).fail(function(){
        alert('Something went wrong');
    });
});

$('body').on('click','.seeBetItem',function(){
    let url = $(this).data('url');
    window.open(url,'_blank');
});


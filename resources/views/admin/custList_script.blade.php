<script>
    function popInfo(username){
        var custinfo =  <?= json_encode($dataUser) ?>;
        $('.modal-body #detail').empty()
        for (let i = 0; i < custinfo.length; i++) {  
            if(custinfo[i]['username'] == username) {
                var name = custinfo[i]['firstname']+ ' '+custinfo[i]['lastname']
                var genderCust = custinfo[i]['gender']
                if (genderCust == 'M') {
                    var gender = 'Laki-laki'
                } else {
                    var gender = 'Perempuan'
                }
                var phone = custinfo[i]['phone']
                var address = custinfo[i]['address']
                var since = custinfo[i]['created_at']
                since = since.substr(0,10)  
                var sc = since.split('-')
                var since_cust = sc[2]+'-'+sc[1]+'-'+sc[0]
                $('.modal-title').text(name)
                $('#img-profile').attr('src', custinfo[i]['image']);
                var detail = '<div class="card" style="width: 99%;">'+
                                '<ul class="list-group list-group-flush">'+
                                    '<li class="list-group-item">'+username+'</li>'+
                                    '<li class="list-group-item">'+phone+'</li>'+
                                    '<li class="list-group-item">'+gender+'</li>'+
                                    '<li class="list-group-item">'+address+'</li>'+
                                '</ul>'+
                                '<div class="card-footer" style="font-size:11px;">'+
                                    'Customer since '+since_cust+
                                '</div>'+
                            '</div>';
                $('.modal-body #detail').append(detail)
            }
        }
        $('#cust-detail').modal('show')
    }
</script>
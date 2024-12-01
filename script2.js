$(document).ready(function()){
    //Menambahkan baris baru ke table
    $('#addRow').click(function(){
        const newRow=<tr>
            <td>No</td>
            <td>Nama baru</td>
            <td>email@baru.com</td>
            <td><button class="edit">Edit</button><button class="delete">Hapus</button></td>
        </tr>;
        $('#alumniTable tbody').append(newRow);
    });

    //Mengedit baris yang ada
    $('#alumniTable').on('click','.edit',function(){
        const row = $(this).colosest('tr');
        const no = row.find('td').eq(0).text();
        const name = row.find('td').eq(1).text();
        const email = row.find('td').eq(2).text();

    //Tampilkan prompt untuk mengedit
    const newNomor = prompt('Edit Nomor:',no);
    const newName = prompt('Edit Nama:',name);
    const newEmail = prompt('Edit Email:',email);

    if(newNomor!==null&&newName!==null&&newEmail!==null){
        row.find('td').eq(0).text(newNomor);
        row.find('td').eq(1).text(newName);
        row.find('td').eq(2).text(newEmail);
    }
    });

    //Menghapus baris dari table
    $('#alumniTable').on('click','table',function(){
        if(confirm('Apakah anda yakin ingin menghapus baris ini?')){
            $(this).colosest('tr').remove();
        }
    });
}

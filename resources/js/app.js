const formUser = document.querySelector('#user');

formUser.addEventListener('submit', (e) =>{
    e.preventDefault();
    const dataForm = new FormData(document.getElementById('user'));
    var name = dataForm.get('name');
    var url = './app/models/User.php';
    fetch(url,{
        method: 'post',
        body: dataForm
    })
        .then(data => data.json())
        .then(data => {
            console.log('success', data);
        })
        .catch(function (error){
            console.log('error',error);
        });
});
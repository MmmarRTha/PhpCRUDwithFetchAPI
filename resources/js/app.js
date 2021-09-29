const formUser = document.querySelector('#createForm');

formUser.addEventListener('submit', (e) => {
    e.preventDefault();
    const dataForm = new FormData(document.getElementById('createForm'));
    let nombre = dataForm.get('name');
    let url = '././app/models/User.php';
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
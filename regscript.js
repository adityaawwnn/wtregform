
const registrationForm = document.getElementById('registrationForm');
const submitButton = document.getElementById('submitButton');
const output = document.getElementById('output');
const result = document.getElementById('result');


registrationForm.addEventListener('submit', function (event) {
    event.preventDefault(); 


    const formData = new FormData(registrationForm);

    const name = formData.get('name');
    const usn = formData.get('usn');
    const email = formData.get('email');
    const phone = formData.get('phone');
    const dob = formData.get('dob');
    const gender = formData.get('gender');
    const address = formData.get('address');
    const arrear = formData.get('arrear');
    const subjects = [];
    

    const subjectCheckboxes = document.querySelectorAll('input[name="subjects"]:checked');
    subjectCheckboxes.forEach(checkbox => {
        subjects.push(checkbox.value);
    });

    output.classList.remove('hidden');
    result.innerHTML = `
        <h2>🎉 Registration Successful</h2>
        <p><strong>Name:</strong> ${name}</p>
        <p><strong>USN:</strong> ${usn}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone:</strong> ${phone}</p>
        <p><strong>Date of Birth:</strong> ${dob}</p>
        <p><strong>Gender:</strong> ${gender}</p>
        <p><strong>Address:</strong> ${address}</p>
        <p><strong>Arrears:</strong> ${arrear}</p>
        <p><strong>Subjects:</strong> ${subjects.join(', ')}</p>
    `;

    
    registrationForm.reset();
});

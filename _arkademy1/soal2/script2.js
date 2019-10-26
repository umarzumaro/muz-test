// console.log('bismillahirohmanirohim');

// function is_username_valid(nama) {


//     // mengubah huruf A sampai Z menjadi kapital
//     let uppercaseRe = /[A-Z]/g;


//     if (nama.length >= 3 && uppercaseRe.test(nama)) {
//         return true;
//     }
//     return false;

// }
// console.log(is_username_valid('TIARA') ? 'benar' : 'salah'); // benar



// function is_age_valid(age) {

//     var strInt = String(age);
//     console.log(strInt.length)

//     if (strInt > 2) {
//         return false;
//     }
//     return true;

// }

// console.log(is_age_valid(0))


function is_password_valid(password) {
    // huruf keci a sampai z
    var lowercaseRe = /[a-z]/g;

    // huruf besar A sampai Z
    var uppercaseRe = /[A-Z]/g;

    // angka dari 0 sampai 9
    var numberRe = /[0-9]/g;

    // karater unik _@#$ atau %
    var specialRe = /[_@#$%]/g;

    if (password.length == 8
        && lowercaseRe.test(password)
        && uppercaseRe.test(password)
        && numberRe.test(password)
        && specialRe.test(password)) {
        return true;
    }

    return false;
}

console.log(is_password_valid('qazW_123') ? 'benar' : 'salah'); // benar

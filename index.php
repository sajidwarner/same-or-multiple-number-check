


checkIfMult(2,4) // true
checkIfMult(2,6) // true
checkIfMult(2,7) // false

checkIfMult(3,6) // true
checkIfMult(3,9) // true
checkIfMult(3,10) // false



      $pp =  checkIfMult(100, 150);

dd($pp);


function checkIfMult($input,$toBeChecked){
    return $toBeChecked % $input === 0;
}

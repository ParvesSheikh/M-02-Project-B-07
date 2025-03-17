<?php

$contacts = [];

function addContact(&$contacts,$name,$email, $phone)
{
    $contacts[] = ["Name" => $name, "Email" => $email, "Phone" => $phone];
}

function displayed($contacts)
{
    if (empty($contacts)) {
        echo "No contacts available \n";
    } else {
        foreach ($contacts as $item) {
            echo "Name: {$item['Name']}, Email: {$item['Email']}, Phone: {$item['Phone']}\n";
        }
    }
}

while (true) {
    echo "\nContact Management Menu:\n";
    echo "1. Add Contact\n2. View Contacts\n3. Exit\n";
    $choice = (int)readline("Choose an option: ");

    if ($choice === 1) {
        $name = readline("Enter name: ");
        $email = readline("Enter email: ");
        $phone = readline("Enter phone number: ");
        addContact($contacts,$name, $email, $phone);
        echo "Name : '$name' added to contacts.\n";
        echo "Email : '$email' added to contacts.\n";
        echo "Phone : '$phone' added to contacts.\n";
        } elseif ($choice === 2) {
        displayed($contacts);
        } elseif ($choice === 3) {
        echo "Exiting...\n";
        break;
        } else {
        echo "Invalid choice. Please try again.\n";
        }
        

}

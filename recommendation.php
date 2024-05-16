<?php
// Simulating a database of medicines and their corresponding symptoms
$medicines = array(
    'Antibiotics (Doctors Prescription Needed)' => array(
        'symptoms' => array('Bacterial_Infection', 'Fever', 'Difficulty_Breathing'),
        'image' => 'assets/img/antibiotics.jpg'
    ),
    'Antipyretics' => array(
        'symptoms' => array('Fever', 'Headache', 'Muscle_Pain'),
        'image' => 'assets/img/antipyretics.jpg'
    ),
    'Azithromycin' => array(
        'symptoms' => array('Pneumonia', 'Cough', 'Fatigue'),
        'image' => 'assets/img/Azithromycin.jpeg'
    ),
    'Bronchodilators' => array(
        'symptoms' => array('Difficulty_Breathing', 'Wheezing', 'Coughing'),
        'image' => 'assets/img/Bronchodilators 1.jpg'
    ),
    'Paracetamol' => array(
        'symptoms' => array('Fever', 'Headache', 'Muscle_Pain'),
        'image' => 'assets/img/paracetamol.png'
    ),
    'Ibuprofen' => array(
        'symptoms' => array('Fever', 'Pain', 'Inflammation'),
        'image' => 'assets/img/Ibuprofen.jpg'
    ),
    'Cetrizine' => array(
        'symptoms' => array('Allergy', 'Cold', 'Hay_Fever'),
        'image' => 'assets/img/Cetrizine.jpg'
    ),
    'Amoxicillin' => array(
        'symptoms' => array('Infection', 'Ear_Infection', 'Throat_Infection'),
        'image' => 'assets/img/Amoxicillin 1.jpg'
    ),
    'Loperamide' => array(
        'symptoms' => array('Diarrhea', 'Stomach_Cramps', 'Gastrointestinal_Disorder'),
        'image' => 'assets/img/loperamide.jpg'
    ),
    'Aspirin' => array(
        'symptoms' => array('Pain', 'Fever', 'Heart_Attack_Prevention'),
        'image' => 'assets/img/Aspirin.jpg'
    ),
    'Cough Syrup' => array(
        'symptoms' => array('Cough', 'Sore_Throat', 'Congestion'),
        'image' => 'assets/img/Cough Syrup 1.png'
    ),
    'Antacid' => array(
        'symptoms' => array('Acid_Reflux', 'Heartburn', 'Indigestion'),
        'image' => 'assets/img/Antacid 2.jpg'
    ),
    'Muscle Relaxant' => array(
        'symptoms' => array('Muscle_Spasms', 'Muscle_Soreness', 'Back_Pain'),
        'image' => 'assets/img/Muscle Relaxant 1.jpg'
    ),
    'Antiemetic' => array(
        'symptoms' => array('Nausea', 'Vomiting', 'Motion_Sickness'),
        'image' => 'assets/img/Antiemetic.jpg'
    ),
    'Antifungal Cream' => array(
        'symptoms' => array('Fungal_Infection', 'Itching', 'Redness'),
        'image' => 'assets/img/Antifungal Cream.jpg'
    ),
    'Anti-inflammatory' => array(
        'symptoms' => array('Inflammation', 'Swelling', 'Pain'),
        'image' => 'assets/img/Anti-inflammatory.jpg'
    ),
    'Pneumonia Antibiotics' => array(
        'symptoms' => array('Pneumonia', 'Fever', 'Cough', 'Difficulty_Breathing'),
        'image' => 'assets/img/Pneumonia Antibiotics.jpg'
    ),
    'Antiviral Medication' => array(
        'symptoms' => array('Viral_Infection', 'Fever', 'Fatigue'),
        'image' => 'C:/xampp/htdocs/hospitalManagement/patient/assets/img/Antiviral Medication 1.jpg'
    ),
    'Bronchodilators' => array(
        'symptoms' => array('Difficulty_Breathing', 'Wheezing', 'Coughing'),
        'image' => 'assets/img/Bronchodilators.jpg'
    ),
    'Pain Reliever' => array(
        'symptoms' => array('Pain', 'Headache', 'Muscle_Pain'),
        'image' => 'assets/img/Pain Reliever.jpg'
    ),
    'Anti-inflammatory Medication' => array(
        'symptoms' => array('Inflammation', 'Swelling', 'Pain'),
        'image' => 'assets/img/Anti-inflammatory Medication.jpg'
    ),
    'Cough Syrup' => array(
        'symptoms' => array('Cough', 'Sore_Throat', 'Congestion'),
        'image' => 'assets/img/Cough Syrup 2.jpg'
    ),
    'Antihistamine' => array(
        'symptoms' => array('Allergy', 'Hay_Fever', 'Sneezing'),
        'image' => 'assets/img/Antihistamine.jpg'
    ),
    'Mucolytics' => array(
        'symptoms' => array('Mucus_Buildup', 'Chest_Congestion', 'Wheezing'),
        'image' => 'assets/img/Mucolytics.jpg'
    ),
    'Expectorant' => array(
        'symptoms' => array('Cough', 'Phlegm', 'Congestion'),
        'image' => 'assets/img/Expectorant 1.jpg'
    ),
    'Decongestant' => array(
        'symptoms' => array('Nasal_Congestion', 'Sinus_Pressure', 'Runny_Nose'),
        'image' => 'assets/img/Decongestant.jpg'
    ),
    'Insulin' => array(
        'symptoms' => array('Type_1_Diabetes', 'Type_2_Diabetes', 'Hyperglycemia'),
        'image' => 'assets/img/Insulin 1.jpg'
    ),
    'Anticoagulant' => array(
        'symptoms' => array('Blood_Clots', 'Deep_Vein_Thrombosis', 'Stroke'),
        'image' => 'assets/img/Anticoagulant.jpg'
    ),
    'Antiemetic' => array(
        'symptoms' => array('Nausea', 'Vomiting', 'Motion_Sickness'),
        'image' => 'assets/img/Antiemetic 2.jpg'
    ),
    'Nasal Spray' => array(
        'symptoms' => array('Nasal_Congestion', 'Runny_Nose', 'Sinus_Pressure'),
        'image' => 'assets/img/Nasal Spray.jpg'
    ),
    'Antidepressant' => array(
        'symptoms' => array('Depression', 'Anxiety', 'Mood_Swings'),
        'image' => 'assets/img/Antidepressant 1.jpg'
    ),
    'Antacid' => array(
        'symptoms' => array('Acid_Reflux', 'Heartburn', 'Indigestion'),
        'image' => 'assets/img/Antacid 2.jpg'
    ),
    'Antifungal Cream' => array(
        'symptoms' => array('Fungal_Infection', 'Itching', 'Redness'),
        'image' => 'assets/img/Antifungal Cream.jpg'
    ),
    'Muscle Relaxant' => array(
        'symptoms' => array('Muscle_Spasms', 'Muscle_Soreness', 'Back_Pain'),
        'image' => 'assets/img/Muscle Relaxant 1.jpg'
    ),
    'Oral Contraceptive' => array(
        'symptoms' => array('Birth_Control', 'Menstrual_Irregularities', 'Acne'),
        'image' => 'assets/img/Oral Contraceptive.jpg'
    ),
    'Laxative' => array(
        'symptoms' => array('Constipation', 'Irregular_Bowel_Movements', 'Abdominal_Discomfort'),
        'image' => 'assets/img/Laxative.jpg'
    ),

    'Antiemetic' => array(
        'symptoms' => array('Nausea', 'Vomiting', 'Motion_Sickness'),
        'image' => 'assets/img/Antiemetic 1.jpg'
    ),
    'Antihistamine' => array(
        'symptoms' => array('Allergy', 'Hay_Fever', 'Sneezing'),
        'image' => 'assets/img/Antihistamine 1.jpg'
    ),
    'Antibacterial Ointment' => array(
        'symptoms' => array('Wound_Infection', 'Skin_Irritation', 'Redness'),
        'image' => 'assets/img/Antibacterial Ointment.png'
    ),
    'Oral Rehydration Solution' => array(
        'symptoms' => array('Dehydration', 'Diarrhea', 'Vomiting'),
        'image' => 'assets/img/Oral Rehydration Solution.jpg'
    ),
    'Anti-seizure Medication' => array(
        'symptoms' => array('Seizures', 'Epilepsy', 'Convulsions'),
        'image' => 'assets/img/Anti-seizure Medication.jpg'
    ),
    'Antacid' => array(
        'symptoms' => array('Acid_Reflux', 'Heartburn', 'Indigestion'),
        'image' => 'assets/img/Antacid.jpg'
    ),
    'Steroid Cream' => array(
        'symptoms' => array('Inflammation', 'Itching', 'Rash'),
        'image' => 'assets/img/Steroid Cream.jpg'
    ),
    'Antiviral Medication' => array(
        'symptoms' => array('Viral_Infection', 'Fever', 'Fatigue'),
        'image' => 'assets/img/Antiviral Medication.jpg'
    ),
    'Anti-anxiety Medication' => array(
        'symptoms' => array('Anxiety', 'Panic_Attacks', 'Social_Phobia'),
        'image' => 'assets/img/Anti-anxiety Medication.jpg'
    ),
    'Antidepressant' => array(
        'symptoms' => array('Depression', 'Mood_Swings', 'Suicidal_Thoughts'),
        'image' => 'assets/img/Antidepressant.jpg'
    ),
    'Asthma Inhaler' => array(
        'symptoms' => array('Asthma', 'Shortness_of_Breath', 'Chest_Tightness'),
        'image' => 'assets/img/asthma.jpg'
    ),
    
);


   

// Get the symptoms and duration from the request
$data = json_decode(file_get_contents('php://input'), true);
$symptoms = explode(', ', $data['symptoms']);
$duration = $data['duration'];

// Find medicines based on symptoms and duration
$recommendedMedicines = array();
foreach ($medicines as $medicine => $info) {
    if (array_intersect($symptoms, $info['symptoms']) && $duration >= 1) {
        $recommendedMedicines[] = array(
            'name' => $medicine,
            'image' => $info['image']
        );
    }
}

// Return the recommended medicines as JSON response
header('Content-Type: application/json');
echo json_encode($recommendedMedicines);
?>

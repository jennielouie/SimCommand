<?php

//$caseArray = $specificCases['body'];
$specificCases = json_encode('{
    "body": [
        {
            "id": 1,
            "authors": [
                "Pamela Andreatta PhD",
                "David Marzano MD",
                "Jennifer Frankel MD",
                "Alexandra Bullough MD"
            ],
            "categories": [
                "Obstetrics/Gynocology"
            ],
            "institutions": [
                "University of Michigan"
            ],
            "instructional_goals": "<div>Sepsis during pregnancy is a rare event. Management of sepsis during pregnancy presents a unique challenge because of maternal physiology as well as fetal status. At the end of the program we expect that all participants will be able to do the following:<ul><li>Identify the constituent care providers who must be involved in the care of a pregnant patient in EM.</li><li>Identify the roles and responsibilities of the team members.</li><li>Distinguish the professional lines of care each team member can provide to a pregnant patient in EM.</li><li>Identify the critical aspects of teamwork that lead to optimal provision of patient care.</li><li>Use specific communication strategies to coordinate patient care & support clinical decision-making.</li><li>Provide guidance to clinical colleagues tasked with providing care for pregnant patients in the EM.</li><li>Provide an interdisciplinary clinical response to a pregnant patient who requires urgent care.</li></ul></div>",
            "number": "OB-001",
            "overview": "Pregnant woman(28 weeks gestation) with an untreated infected toe and pregestational diabetes leads to sepsis.",
            "published_date": "2014-03-27 20:49:45",
            "title": "Sepsis During Pregnancy"
        },
        {
            "id": 2,
            "authors": [
                "Eric A. Brown MD"
            ],
            "categories": [
                "Emergency Medicine - Adults"
            ],
            "institutions": [
                "Palmetto Health- USC School of Medicine Simulation Center Columbia, SC"
            ],
            "instructional_goals": "This case can lead the treating physician to believe that the patient\u2019s condition is caused by either primary pulmonary disease (exacerbation of COPD) or hypovolemia secondary to gastrointestinal bleeding.  The ultrasound videos of the heart also show a small, relatively inconsequential pericardial effusion.  However, the physician should be able to determine that the real cause of the patient\u2019s shock is heart failure and initiate appropriate therapy.  By using bedside ultrasound, the physician can quickly determine that the patient has very poor cardiac function, volume overload, & pulmonary edema.  Intravenous fluids will cause the patient\u2019s condition to deteriorate.",
            "number": "EM-A-001",
            "overview": "This is a case of decompensated heart failure.  The patient has risk factors for cardiovascular disease as well as COPD. Bedside ultrasound technology is used to differentiate causes of shock.",
            "published_date": null,
            "title": "Decompensated CHF"
        },
        {
            "id": 3,
            "authors": [
                "Neal Andrews MD",
                "Eric A. Brown MD"
            ],
            "categories": [
                "Emergency Medicine - Pediatrics"
            ],
            "institutions": [
                "Palmetto Health- USC School of Medicine Simulation Center Columbia, SC"
            ],
            "instructional_goals": "This is a case of a pediatric patient presenting with presumed seizure and altered mental status.  The patient has obvious head trauma and abnormal vital signs necessitating emergent airway control and aggressive resuscitative measures.  The patient decompensates during the scenario necessitating blood product adminstration.  While most critical care scenarios are challenging, particularly when a pediatric patient is involved, this case is complicated further by the possibility of non-accidental trauma.  Attention to stabilization of the patient is paramount, while the social overtones must also be dealt with.",
            "number": "EM-P-001",
            "overview": "This is a case of pediatric traumatic hypovolemic shock secondary to non-accidental trauma.",
            "published_date": null,
            "title": "Nonaccidental Trauma/ Pediatric Hypovolemic Shock"
        }
    ],
    "code": 200,
    "result": "success"
}', true);

$caseArray = json_encode($specificCases['body']);
 ?>
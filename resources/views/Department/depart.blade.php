@extends('Layout.head')
<main id="main">

    <div class="container-fluid about-banner">
        <h1 class="page-heading">Departments</h1>
    </div>

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
        <div class="container">

            <div class="section-title">
                <p>
                    From maternity care to pediatric specialties, gynecological services, and beyond, we offer a
                    comprehensive range of services tailored to every age and need.
                </p>
            </div>

            <div class="maindept">
                <div class="dept">
                    <ul class="nav nav-tabs flex-column">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Oncology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Critical Care</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-4">General Medicine</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Pulmonary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-6">General Surgery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-7">Gastroneterology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-8">ENT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-9">Neurology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-10">Pediatric Surgery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-11">Gynecology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-12">Urology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-13">Nephrology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-14">Orthopedic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-15">Ophtalmology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-16">Dermatology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-17">Plastic Surgery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-18">Dentistry</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-19">NICU</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-20">Physiotherapy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab-21">CT Scan</a>
                        </li>
                    </ul>
                </div>
                <div class="dcontent">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Cardiology</h3>
                                    <p class="fst-italic">
                                        Cardiology is the branch of medicine that deals with disorders of the heart as
                                        well as some parts of the circulatory system. Cardiologists are medical doctors
                                        who specialize in diagnosing and treating conditions related to the heart and
                                        blood vessels.
                                    </p>
                                    <img src="{{asset('assets/img/department/cardiologydept.jpeg')}}" alt=""
                                        class="img-fluid">
                                    <ul>
                                        <li>
                                            A cardiology department in a hospital typically offers a range of services
                                            including:
                                        </li>
                                    </ul>
                                    <ol>
                                        <li>
                                            <b>Diagnostic Services:</b> This may include electrocardiography (ECG),
                                            echocardiography (echo), stress tests, Holter monitoring, and cardiac
                                            catheterization.
                                        </li>
                                        <li>
                                            <b>Treatment Services:</b> Cardiology departments often provide treatments
                                            such as medication management for conditions like hypertension (high blood
                                            pressure), heart failure, or arrhythmias (irregular heartbeats). They may
                                            also offer interventional procedures like angioplasty and stent placement
                                            for coronary artery disease or implantation of pacemakers and
                                            defibrillators.
                                        </li>
                                        <li>
                                            <b>Rehabilitation:</b> Some hospitals have cardiac rehabilitation programs
                                            to help patients recover from heart attacks, heart surgery, or other cardiac
                                            events. These programs typically involve exercise training, education on
                                            heart-healthy living, and emotional support.
                                        </li>
                                        <li>
                                            <b>Electrophysiology Services:</b> Electrophysiology studies and procedures
                                            are performed to diagnose and treat heart rhythm disorders (arrhythmias)
                                            such as atrial fibrillation, supraventricular tachycardia, and ventricular
                                            tachycardia.
                                        </li>
                                        <li>
                                            <b>Heart Failure Management:</b> Heart failure clinics may be available to
                                            help patients manage their condition through medication adjustments,
                                            lifestyle modifications, and monitoring.
                                        </li>
                                        <li>
                                            <b>Preventive Cardiology:</b> Some cardiology departments focus on
                                            preventive care, providing risk assessments, lifestyle counseling, and
                                            screening tests to help patients reduce their risk of developing
                                            cardiovascular disease.
                                        </li>
                                        <li>
                                            <b>Research and Clinical Trials:</b> Academic hospitals or larger medical
                                            centers may conduct research in cardiology and participate in clinical
                                            trials to advance knowledge and treatment options for heart disease.
                                        </li>
                                        <li>
                                            <b>Consultation Services:</b> Cardiologists may provide consultations for
                                            patients admitted to the hospital for other reasons who may have underlying
                                            heart conditions or require cardiac evaluation.
                                        </li>

                                    </ol>
                                    <p>
                                        It's important to note that the specific services offered by a cardiology
                                        department can vary depending on the resources and expertise available at the
                                        hospital. If you're seeking information about the cardiology department at Lion
                                        Tarachand Bapa Hospital, I would recommend contacting the hospital directly or
                                        visiting their website for more information.
                                    </p>
                                    <p>
                                        In conclusion, cardiology is a vital branch of medicine focused on the
                                        diagnosis, treatment, and prevention of cardiovascular diseases, which affect
                                        the heart and blood vessels. With an understanding of risk factors, diagnostic
                                        tools, and treatment modalities, cardiologists work to improve patient outcomes
                                        and quality of life. Emphasizing preventive measures, such as lifestyle
                                        modifications and early detection, can significantly reduce the burden of
                                        cardiovascular diseases. As research and advancements continue to evolve, the
                                        field of cardiology remains at the forefront of innovation, striving to enhance
                                        patient care and promote cardiovascular health worldwide.
                                    </p>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane" id="tab-2">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Oncology</h3>
                                    <p class="fst-italic">
                                        Oncology is the branch of medicine that deals with the prevention, diagnosis,
                                        and treatment of cancer. Oncologists are medical professionals specialized in
                                        the management of cancer and work closely with a multidisciplinary team to
                                        provide comprehensive care to cancer patients. Here are some key points about
                                        oncology:
                                    </p>
                                    <img src="{{asset('assets/img/department/oncologydept.jpeg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Types of Oncologists:</b> There are different types of oncologists based
                                            on their area of specialization. Medical oncologists treat cancer using
                                            chemotherapy, targeted therapy, immunotherapy, and other systemic
                                            treatments. Surgical oncologists perform surgical procedures to remove
                                            tumors and surrounding tissues. Radiation oncologists administer radiation
                                            therapy to destroy cancer cells. Additionally, there are subspecialties such
                                            as pediatric oncology (focused on childhood cancers) and gynecologic
                                            oncology (focused on cancers of the female reproductive system).
                                        </li>
                                        <li>
                                            <b>Cancer Diagnosis:</b> Oncologists use various diagnostic tools to
                                            determine the type, stage, and extent of cancer. These may include imaging
                                            tests like X-rays, CT scans, MRI scans, PET scans, and biopsies (removal of
                                            a tissue sample for examination under a microscope).
                                        </li>
                                        <li>
                                            <b>Cancer Treatment:</b> Treatment approaches for cancer may include
                                            surgery, chemotherapy, radiation therapy, immunotherapy, targeted therapy,
                                            hormone therapy, stem cell transplantation, or a combination of these
                                            modalities. The choice of treatment depends on factors such as the type and
                                            stage of cancer, the patient's overall health, and their preferences.
                                        </li>
                                        <li>
                                            <b>Multidisciplinary Care:</b> Oncology care often involves a
                                            multidisciplinary team of healthcare professionals, including oncologists,
                                            surgeons, radiation oncologists, pathologists, radiologists, nurses, social
                                            workers, and other specialists. This collaborative approach ensures
                                            comprehensive and personalized care for cancer patients.
                                        </li>
                                        <li>
                                            <b>Supportive Care:</b> In addition to cancer treatments, oncology care
                                            includes supportive care to help manage symptoms, alleviate side effects of
                                            treatment, and improve the quality of life for cancer patients. Supportive
                                            care services may include pain management, nutritional support,
                                            psychological counseling, palliative care, and hospice care.
                                        </li>
                                        <li>
                                            <b>Research and Clinical Trials:</b> Oncology is a rapidly advancing field
                                            with ongoing research aimed at developing new cancer treatments, improving
                                            existing therapies, and understanding the underlying mechanisms of cancer.
                                            Many hospitals and research institutions conduct clinical trials to evaluate
                                            experimental treatments and therapies for various types of cancer.
                                        </li>
                                        <li>
                                            <b>Cancer Survivorship:</b> Oncology care extends beyond the initial
                                            treatment phase to include survivorship care for individuals who have
                                            completed cancer treatment. Survivorship care focuses on monitoring for
                                            cancer recurrence, managing long-term side effects of treatment, promoting
                                            overall health and wellness, and addressing the psychosocial needs of cancer
                                            survivors.
                                        </li>
                                        <li>
                                            <b>Consultation Services:</b> Cardiologists may provide consultations for
                                            patients admitted to the hospital for other reasons who may have underlying
                                            heart conditions or require cardiac evaluation.
                                        </li>
                                    </ol>
                                    <p>
                                        In conclusion, oncology is a critical field of medicine dedicated to the
                                        prevention, diagnosis, and treatment of cancer. Oncologists work collaboratively
                                        with multidisciplinary teams to provide personalized care to cancer patients,
                                        utilizing a range of treatment modalities including surgery, chemotherapy,
                                        radiation therapy, immunotherapy, targeted therapy, and supportive care
                                        services.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-3">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Critical Care</h3>
                                    <p class="fst-italic">
                                        Critical care, also known as intensive care, is a specialized medical service
                                        provided to patients with life-threatening illnesses or injuries. Critical care
                                        units (CCUs) in hospitals are staffed by a multidisciplinary team of highly
                                        trained healthcare professionals who are equipped to provide advanced
                                        monitoring, treatment, and support to critically ill patients. Here are some key
                                        points about critical care:
                                    </p>
                                    <img src="{{asset('assets/img/department/criticalcaredept.webp')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Patient Population:</b> Critical care units cater to a diverse patient
                                            population, including those with severe infections, respiratory failure,
                                            cardiovascular emergencies, neurological disorders, trauma, and
                                            post-surgical complications. These patients require close monitoring and
                                            immediate intervention to stabilize their condition and prevent further
                                            deterioration.
                                        </li>
                                        <li>
                                            <b>Multidisciplinary Team:</b> Critical care teams typically include
                                            intensivists (physicians specialized in critical care medicine), critical
                                            care nurses, respiratory therapists, pharmacists, dietitians, physical
                                            therapists, social workers, and other healthcare professionals.
                                            Collaboration among team members is essential to providing comprehensive and
                                            coordinated care to critically ill patients.
                                        </li>
                                        <li>
                                            <b>Advanced Monitoring:</b> Critical care units are equipped with advanced
                                            monitoring devices and equipment to continuously assess vital signs,
                                            oxygenation, cardiac function, neurological status, and other parameters.
                                            This allows healthcare providers to promptly identify changes in the
                                            patient's condition and intervene as necessary.
                                        </li>
                                        <li>
                                            <b>Life-Saving Interventions:</b> Critical care interventions may include
                                            mechanical ventilation to support breathing, hemodynamic support with
                                            vasopressors or inotropes to maintain blood pressure, renal replacement
                                            therapy for kidney failure, sedation and pain management, nutritional
                                            support, and administration of intravenous medications.
                                        </li>
                                        <li>
                                            <b>Specialized Techniques:</b> Critical care units may employ specialized
                                            techniques such as extracorporeal membrane oxygenation (ECMO) for patients
                                            with severe respiratory or cardiac failure, continuous renal replacement
                                            therapy (CRRT) for acute kidney injury, and therapeutic hypothermia for
                                            patients with cardiac arrest or neurological emergencies.
                                        </li>
                                        <li>
                                            <b>Family-Centered Care:</b> Critical care teams recognize the importance of
                                            involving patients' families in the care process and providing emotional
                                            support and communication throughout the patient's hospitalization. Family
                                            members are often encouraged to participate in care discussions, receive
                                            updates on the patient's condition, and participate in decision-making
                                            regarding treatment options.
                                        </li>
                                        <li>
                                            <b>Post-ICU Care:</b> After discharge from the critical care unit, patients
                                            may require ongoing rehabilitation and follow-up care to recover from their
                                            illness or injury. Critical care teams collaborate with rehabilitation
                                            specialists and primary care providers to ensure a smooth transition and
                                            optimize the patient's long-term outcomes.
                                        </li>
                                        <li>
                                            <b>Quality Improvement Initiatives:</b> Critical care units often
                                            participate in quality improvement initiatives aimed at enhancing patient
                                            safety, optimizing clinical outcomes, and implementing evidence-based
                                            practices. These initiatives may involve regular performance monitoring,
                                            clinical audits, and staff education and training.
                                        </li>
                                    </ol>
                                    <p>
                                        Overall, critical care plays a crucial role in saving lives and improving
                                        outcomes for patients with life-threatening conditions. The specialized
                                        expertise and resources available in critical care units enable healthcare
                                        providers to deliver timely and effective interventions, ultimately improving
                                        the chances of survival and recovery for critically ill patients.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-4">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>
                                        General Medicine
                                    </h3>
                                    <p class="fst-italic">
                                        General medicine, also known as internal medicine, is a branch of medicine that
                                        focuses on the prevention, diagnosis, and nonsurgical treatment of adult
                                        diseases. Here are some key points about general medicine:
                                    </p>
                                    <img src="{{asset('assets/img/department/generalmedicinedept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Primary Care Physicians:</b> General medicine practitioners, often
                                            referred to as internists or general practitioners, serve as primary care
                                            physicians who provide comprehensive medical care to adults. They are
                                            trained to diagnose and manage a wide range of acute and chronic medical
                                            conditions.
                                        </li>
                                        <li>
                                            <b>Preventive Care:</b> General medicine emphasizes preventive healthcare
                                            measures aimed at maintaining overall health and preventing the onset of
                                            diseases. This includes routine health screenings, vaccinations, lifestyle
                                            counseling, and management of risk factors such as hypertension, diabetes,
                                            and obesity.
                                        </li>
                                        <li>
                                            <b>Diagnosis and Treatment:</b> General medicine physicians are skilled in
                                            diagnosing various medical conditions based on patients' symptoms, medical
                                            history, physical examinations, and diagnostic tests. They manage a broad
                                            spectrum of health issues, including respiratory infections,
                                            gastrointestinal disorders, cardiovascular diseases, endocrine disorders,
                                            musculoskeletal conditions, and mental health issues.
                                        </li>
                                        <li>
                                            <b>Chronic Disease Management:</b> General medicine practitioners play a
                                            crucial role in managing chronic diseases such as diabetes, hypertension,
                                            asthma, chronic obstructive pulmonary disease (COPD), arthritis, and
                                            autoimmune disorders. They work with patients to develop personalized
                                            treatment plans aimed at controlling symptoms, preventing complications, and
                                            improving quality of life.
                                        </li>
                                        <li>
                                            <b>Coordination of Care:</b> General medicine physicians often collaborate
                                            with other healthcare providers, specialists, and allied health
                                            professionals to ensure comprehensive and coordinated care for patients with
                                            complex medical needs. They serve as advocates for their patients, helping
                                            them navigate the healthcare system and access appropriate medical services.
                                        </li>
                                        <li>
                                            <b>Continuity of Care:</b> Establishing long-term relationships with
                                            patients is a fundamental aspect of general medicine. By providing
                                            continuity of care, general medicine physicians develop a deep understanding
                                            of their patients' medical histories, preferences, and needs, allowing for
                                            more effective management of their health over time.
                                        </li>
                                        <li>
                                            <b>Hospital-Based Practice:</b> In addition to outpatient care, many general
                                            medicine physicians also provide medical services in hospital settings,
                                            where they manage patients admitted for acute illnesses, exacerbations of
                                            chronic conditions, or specialized medical care.
                                        </li>
                                        <li>
                                            <b>Medical Education and Research:</b> General medicine is also involved in
                                            medical education and research, with internists often serving as educators,
                                            mentors, and researchers in academic medical centers. They contribute to
                                            advancing medical knowledge through clinical research, teaching medical
                                            students and residents, and participating in continuing medical education
                                            activities.
                                        </li>
                                    </ol>
                                    <p>
                                        Overall, general medicine plays a crucial role in promoting and maintaining the
                                        health and well-being of adults through comprehensive medical care, preventive
                                        interventions, and management of acute and chronic medical conditions. If you're
                                        interested in general medicine services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-5">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Pulmonary Rehab</h3>
                                    <p class="fst-italic">
                                        Pulmonary rehabilitation is a specialized program designed to help individuals
                                        with chronic lung diseases improve their quality of life and manage their
                                        symptoms more effectively.
                                    </p>
                                    <img src="{{asset('assets/img/department/pulmanaryrehabdept.png')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Purpose:</b> Pulmonary rehabilitation aims to address the physical,
                                            emotional, and social aspects of living with chronic lung diseases such as
                                            chronic obstructive pulmonary disease (COPD), asthma, pulmonary fibrosis,
                                            and bronchiectasis. The program focuses on improving exercise tolerance,
                                            reducing shortness of breath, enhancing daily functioning, and promoting
                                            self-management skills.
                                        </li>
                                        <li>
                                            <b>Components:</b> Pulmonary rehabilitation programs typically include a
                                            combination of exercise training, education, and psychosocial support.
                                            Exercise training involves supervised exercise sessions tailored to the
                                            individual's abilities and needs, aiming to improve cardiovascular fitness,
                                            muscle strength, and endurance. Educational sessions cover topics such as
                                            breathing techniques, medication management, nutrition, energy conservation,
                                            and coping strategies for managing symptoms and exacerbations.
                                        </li>
                                        <li>
                                            <b>Multidisciplinary Team:</b> Pulmonary rehabilitation is delivered by a
                                            multidisciplinary team of healthcare professionals, including
                                            pulmonologists, respiratory therapists, physical therapists, occupational
                                            therapists, nurses, dietitians, and psychologists. This collaborative
                                            approach ensures comprehensive care and addresses the diverse needs of
                                            participants.
                                        </li>
                                        <li>
                                            <b>Assessment and Individualized Care Plans:</b> Before starting pulmonary
                                            rehabilitation, participants undergo a comprehensive assessment to evaluate
                                            their baseline functional status, exercise capacity, respiratory symptoms,
                                            and psychosocial needs. Based on the assessment findings, individualized
                                            care plans are developed to address specific goals and challenges.
                                        </li>
                                        <li>
                                            <b>Supervised Exercise Sessions:</b> The exercise component of pulmonary
                                            rehabilitation typically involves structured, supervised exercise sessions
                                            conducted in a clinical setting or outpatient facility. These sessions may
                                            include aerobic exercises (such as walking, cycling, or treadmill walking),
                                            strength training exercises, and breathing exercises. Exercise intensity and
                                            duration are adjusted based on the individual's tolerance and progress over
                                            time.
                                        </li>
                                        <li>
                                            <b>Education and Self-Management:</b> Educational sessions provide
                                            participants with information and skills to better understand their lung
                                            condition and manage it effectively. Topics may include proper inhaler
                                            techniques, symptom recognition, breathing strategies, stress management,
                                            relaxation techniques, smoking cessation, and pulmonary hygiene practices.
                                        </li>
                                        <li>
                                            <b>Progress Monitoring and Follow-Up:</b> Throughout the pulmonary
                                            rehabilitation program, participants' progress is monitored closely, and
                                            adjustments are made to the care plan as needed. Follow-up assessments may
                                            be conducted to evaluate outcomes and provide ongoing support after
                                            completing the program.
                                        </li>
                                        <li>
                                            <b>Benefits:</b> Pulmonary rehabilitation has been shown to offer numerous
                                            benefits for individuals with chronic lung diseases, including improved
                                            exercise capacity, reduced dyspnea (shortness of breath), enhanced quality
                                            of life, decreased hospital admissions, and improved adherence to
                                            self-management strategies.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in pulmonary rehabilitation services at Lion Tarachand Bapa
                                        Hospital, I recommend contacting the hospital directly or visiting their website
                                        for more information about the availability of such programs and the specific
                                        services they offer.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-6">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>General Surgery</h3>
                                    <p class="fst-italic">
                                        General surgery is a surgical specialty that focuses on the surgical treatment
                                        of a wide range of medical conditions affecting various organs and body systems.
                                        Here are some key aspects of general surgery:
                                    </p>
                                    <img src="{{asset('assets/img/department/general_surgerydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> General surgeons are trained to perform surgical
                                            procedures on many parts of the body, including the abdomen, digestive
                                            system, breast, skin, and endocrine glands. They treat conditions such as
                                            appendicitis, gallbladder disease, hernias, gastrointestinal tumors, breast
                                            cancer, thyroid disorders, hemorrhoids, and trauma injuries.
                                        </li>
                                        <li>
                                            <b>Common Procedures:</b> General surgeons perform a variety of surgical
                                            procedures, both elective and emergency. Common procedures include
                                            appendectomy (removal of the appendix), cholecystectomy (removal of the
                                            gallbladder), hernia repair, bowel resection, mastectomy (breast removal),
                                            thyroidectomy (removal of the thyroid gland), and hemorrhoidectomy (removal
                                            of hemorrhoids).
                                        </li>
                                        <li>
                                            <b>Minimally Invasive Surgery:</b> Many general surgery procedures can now
                                            be performed using minimally invasive techniques, such as laparoscopy or
                                            robotic surgery. These approaches involve making small incisions and using
                                            specialized instruments and cameras to perform surgery, resulting in less
                                            pain, faster recovery, and shorter hospital stays compared to traditional
                                            open surgery.
                                        </li>
                                        <li>
                                            <b>Emergency Surgery:</b> General surgeons are also trained to manage
                                            surgical emergencies, such as trauma injuries, acute abdominal conditions
                                            (e.g., appendicitis, bowel obstruction), and surgical complications. They
                                            play a critical role in providing timely and life-saving surgical
                                            interventions for patients in emergency situations.
                                        </li>
                                        <li>
                                            <b>Preoperative and Postoperative Care:</b> General surgeons are responsible
                                            for assessing patients before surgery, obtaining informed consent, and
                                            planning the surgical approach. They also provide comprehensive preoperative
                                            evaluation and optimization to minimize surgical risks and complications.
                                            After surgery, they oversee postoperative care, including wound management,
                                            pain control, and monitoring for complications.
                                        </li>
                                        <li>
                                            <b>Collaborative Approach:</b> General surgeons often work closely with
                                            other medical specialists, including anesthesiologists, radiologists,
                                            oncologists, and gastroenterologists, to provide multidisciplinary care for
                                            patients. They may also collaborate with primary care physicians and other
                                            healthcare professionals to coordinate comprehensive treatment plans for
                                            patients with complex medical needs.
                                        </li>
                                        <li>
                                            <b>Continuing Education and Training:</b> General surgeons undergo extensive
                                            medical education and training, including medical school, residency training
                                            in general surgery, and sometimes fellowship training in specialized areas
                                            such as surgical oncology, colorectal surgery, or minimally invasive
                                            surgery. They also participate in continuing medical education to stay
                                            current with advances in surgical techniques and technology.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in general surgery services at Lion Tarachand Bapa
                                        Hospital, I recommend contacting the hospital directly or visiting their website
                                        for more information about the availability of these services and the specific
                                        surgical procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-7">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Gastroenterology</h3>
                                    <p class="fst-italic">
                                        Gastroenterology is a medical specialty that focuses on the diagnosis and
                                        treatment of disorders affecting the digestive system, including the esophagus,
                                        stomach, small intestine, colon, rectum, pancreas, liver, gallbladder, and
                                        biliary tract. Gastroenterologists are physicians who specialize in this field
                                        and are trained to manage a wide range of gastrointestinal (GI) conditions.
                                    </p>
                                    <img src="{{asset('assets/img/department/Gastroenterologydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Gastroenterologists use various diagnostic
                                            procedures to evaluate and diagnose gastrointestinal disorders. Common
                                            procedures include upper endoscopy (esophagogastroduodenoscopy or EGD),
                                            colonoscopy, flexible sigmoidoscopy, endoscopic retrograde
                                            cholangiopancreatography (ERCP), capsule endoscopy, and liver biopsy.
                                        </li>
                                        <li>
                                            <b>Conditions Treated:</b> Gastroenterologists diagnose and manage a wide
                                            range of GI conditions, including gastroesophageal reflux disease (GERD),
                                            peptic ulcers, inflammatory bowel diseases (such as Crohn's disease and
                                            ulcerative colitis), irritable bowel syndrome (IBS), celiac disease,
                                            diverticulitis, pancreatitis, liver cirrhosis, hepatitis, gallstones, and
                                            gastrointestinal cancers.
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in gastroenterology vary
                                            depending on the specific condition and its severity. Gastroenterologists
                                            may prescribe medications, recommend dietary and lifestyle modifications,
                                            perform endoscopic procedures for diagnosis and treatment, and coordinate
                                            surgical interventions when necessary.
                                        </li>
                                        <li>
                                            <b>Endoscopic Interventions:</b> Gastroenterologists are trained to perform
                                            various therapeutic procedures using endoscopy. These procedures may include
                                            the removal of polyps or tumors, dilation of strictures (narrowed areas),
                                            placement of stents, control of bleeding, treatment of varices (enlarged
                                            veins), and removal of foreign bodies from the GI tract.
                                        </li>
                                        <li>
                                            <b>Liver Disease Management:</b> Gastroenterologists often specialize in
                                            hepatology, the branch of medicine focused on the liver. They diagnose and
                                            manage liver diseases such as viral hepatitis (hepatitis B and C), fatty
                                            liver disease, autoimmune hepatitis, alcoholic liver disease, liver
                                            cirrhosis, and liver cancer.
                                        </li>
                                        <li>
                                            <b>Screening and Prevention:</b> Gastroenterologists play a crucial role in
                                            colorectal cancer screening and prevention. They recommend screening tests
                                            such as colonoscopy, sigmoidoscopy, and fecal occult blood testing (FOBT) to
                                            detect colorectal cancer and precancerous polyps early when treatment is
                                            most effective.
                                        </li>
                                        <li>
                                            <b>Continuity of Care:</b> Gastroenterologists provide ongoing care for
                                            patients with chronic GI conditions, monitoring their progress, adjusting
                                            treatment plans as needed, and addressing any complications or concerns that
                                            arise over time. They work closely with primary care physicians and other
                                            specialists to coordinate comprehensive care for patients with complex
                                            medical needs.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Gastroenterology is a dynamic field with
                                            ongoing research aimed at understanding the mechanisms of GI diseases,
                                            developing new treatment modalities, and improving outcomes for patients.
                                            Gastroenterologists may participate in clinical trials and contribute to
                                            advancements in endoscopic techniques, diagnostic tools, and therapeutic
                                            interventions.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in gastroenterology services at Lion Tarachand Bapa
                                        Hospital, I recommend contacting the hospital directly or visiting their website
                                        for more information about the availability of these services and the specific
                                        gastrointestinal conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-8">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>ENT</h3>
                                    <h4>Goal</h4>
                                    <p class="fst-italic">
                                        Main goal of ENT department is to treat the patients of common ENT problems,
                                        treat them surgically if required & restoring patients with hearing impairment
                                        with provisional of hearing aids.
                                    </p>
                                    <img src="{{asset('assets/img/ent.jpg')}}" alt="" class="img-fluid">
                                    <h4>Objective</h4>
                                    <div>Knowledge</div>
                                    <li>Understand the basic pathophysiology & management of common ENT diseases and
                                        emergencies.</li>
                                    <li>Appropriate & judicial use of commonly used drugs in ENT, keeping in mind their
                                        adverse reactions.</li>
                                    <li>Perform common investigative procedures and their interpretation.</li>
                                    <h3 style="font-size: 18px; margin-top: 10px;">Skill</h3>
                                    <ol>
                                        <li>Examination & Diagnosis of common ENT problems including malignant &
                                            premalignant lesions of head & Neck.</li>
                                        <li>Manage ENT problems at level & prompt referral to the tertiary center when
                                            required.</li>
                                        <li>Perform minor surgical procedure like ear syringing, ear dressing, nasal
                                            packing, removal of foreign bodies from nose & ear.</li>
                                        <li>Assisting in procedure like endoscopies, tracheostomy.</li>

                                    </ol>

                                    <h3 style="font-size: 18px;">Departmental Facilities</h3>
                                    <ol>
                                        <li>OPD services : The OPD runs daily from 9 am to 1 pm except Sundays & public
                                            holidays, Here in OPD all common ENT problems are promptly managed and minor
                                            procedures like ear syringing, Foreign body removal from ear & nose , Aural
                                            toilet</li>
                                        <li>Indoor patient care: All patient requiring surgical treatment admitted in
                                            wards & proper pre operative investigations & pre operative care provided by
                                            doctors & nursing staff</li>
                                        <li>Procedures</li>
                                        <ul style="list-style: disc;">
                                            <li>Tympanoplasty for CSOM</li>
                                            <li>Septoplasty for DNS</li>
                                            <li>Tonsillectomy for chronic tonsillitis</li>
                                            <li>Reduction of nasal bone fractures</li>
                                            <li>Biopsy of suspicious malignancies</li>
                                            <li>Microscopic examination</li>
                                            <li>Ear suturing for split ear</li>
                                            <li>Thyroidectomises for diffuse thyroid swellings</li>
                                        </ul>
                                    </ol>
                                    <h4>Facilities</h4>
                                    <ul class="facilitydept">
                                        <li>FACILITY, DEPARTMENT OF ENT</li>
                                        <li>STUDENT LECTURE ROOM</li>
                                        <li>SCOPY ROOM</li>
                                        <li>MINOR PROCEDURE ROOM</li>
                                        <li>COMPUTER ROOM</li>
                                        <li>BERA ROOM</li>
                                        <li>AUDIOLOGIST ROOM</li>
                                        <li>4 OPD ROOM</li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-9">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Neurology</h3>
                                    <p class="fst-italic">
                                        Neurology is a medical specialty that focuses on the diagnosis and treatment of
                                        disorders affecting the nervous system, including the brain, spinal cord,
                                        nerves, and muscles.
                                    </p>
                                    <img src="{{asset('assets/img/department/neurologydept.webp')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Neurologists diagnose and treat a variety of
                                            neurological disorders, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>Stroke</li>
                                                <li>Epilepsy</li>
                                                <li>Multiple sclerosis</li>
                                                <li>Parkinson's disease</li>
                                                <li>Alzheimer's disease and other dementias</li>
                                                <li>Headaches and migraines</li>
                                                <li>Neuromuscular disorders (such as myasthenia gravis and muscular
                                                    dystrophy)</li>
                                                <li>Movement disorders (such as tremors and dystonia)</li>
                                                <li>Neurodevelopmental disorders (such as autism spectrum disorder and
                                                    attention deficit hyperactivity disorder)</li>s
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Neurologists use various diagnostic tools and
                                            procedures to evaluate patients with neurological symptoms. These may
                                            include neurological examinations, imaging studies (such as MRI and CT
                                            scans), electroencephalography (EEG), electromyography (EMG), nerve
                                            conduction studies, lumbar puncture (spinal tap), and genetic testing.
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in neurology depend on the
                                            specific condition and its underlying cause. Neurologists may prescribe
                                            medications to manage symptoms, prevent disease progression, or control
                                            seizures. They may also recommend lifestyle modifications, physical therapy,
                                            occupational therapy, speech therapy, or assistive devices to improve
                                            function and quality of life for patients with neurological disabilities.
                                        </li>
                                        <li>
                                            <b>Stroke Care:</b> Neurologists play a key role in the management of
                                            stroke, a medical emergency that occurs when blood flow to the brain is
                                            interrupted. They are trained to diagnose stroke quickly, initiate
                                            appropriate treatment (such as clot-busting medications or mechanical
                                            thrombectomy), and provide post-stroke care to prevent complications and
                                            promote recovery.
                                        </li>
                                        <li>
                                            <b>Epilepsy Management:</b> Neurologists specialize in the diagnosis and
                                            treatment of epilepsy, a chronic neurological disorder characterized by
                                            recurrent seizures. They may prescribe antiepileptic medications, recommend
                                            dietary therapies (such as the ketogenic diet), or evaluate patients for
                                            epilepsy surgery or other advanced treatment options.
                                        </li>
                                        <li>
                                            <b>Neuromuscular Disorders:</b> Neurologists evaluate and manage
                                            neuromuscular disorders that affect the nerves, muscles, and neuromuscular
                                            junctions. They may perform nerve conduction studies and electromyography to
                                            assess nerve and muscle function and recommend treatments such as physical
                                            therapy, medications, or immunosuppressive therapy for conditions like
                                            myasthenia gravis or Guillain-Barré syndrome.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Neurology is a rapidly evolving field with
                                            ongoing research aimed at understanding the pathophysiology of neurological
                                            diseases, developing new treatment modalities, and improving outcomes for
                                            patients. Neurologists may participate in clinical trials and contribute to
                                            advancements in neuroimaging, neurogenetics, neuropharmacology, and
                                            neurorehabilitation.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in neurology services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific
                                        neurological conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-10">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Pediatric Surgery</h3>
                                    <p class="fst-italic">
                                        Pediatric surgery is a surgical specialty focused on the diagnosis, treatment,
                                        and management of surgical conditions in infants, children, and adolescents.
                                        Pediatric surgeons are specially trained to care for young patients, addressing
                                        a wide range of surgical needs unique to pediatric populations.
                                    </p>
                                    <img src="{{asset('assets/img/department/pediatricsurgerydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Pediatric surgeons diagnose and treat a variety of
                                            surgical conditions affecting children, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Congenital anomalies (such as cleft lip and palate, congenital heart
                                                    defects, and gastrointestinal malformations)
                                                </li>
                                                <li>
                                                    Pediatric cancers (such as neuroblastoma, Wilms tumor, and leukemia)
                                                </li>
                                                <li>
                                                    Abdominal conditions (such as appendicitis, intestinal obstruction,
                                                    and hernias)
                                                </li>
                                                <li>
                                                    Trauma injuries (such as fractures, head injuries, and burns)
                                                </li>
                                                <li>
                                                    Urological conditions (such as hypospadias, undescended testes, and
                                                    vesicoureteral reflux)
                                                </li>
                                                <li>
                                                    Thoracic conditions (such as congenital diaphragmatic hernia and
                                                    lung tumors)
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Age Range:</b> Pediatric surgeons typically provide care to patients from
                                            newborns to adolescents, covering a broad age range from birth to 18 years
                                            old. They have expertise in managing surgical conditions that may arise
                                            during infancy, childhood, and adolescence.
                                        </li>
                                        <li>
                                            <b>Surgical Procedures:</b> Pediatric surgeons perform a variety of surgical
                                            procedures tailored to the unique anatomical and physiological needs of
                                            children. These may include corrective surgeries for congenital anomalies,
                                            tumor resections, minimally invasive procedures (such as laparoscopy and
                                            thoracoscopy), trauma surgeries, reconstructive surgeries, and organ
                                            transplants (such as liver or kidney transplants).
                                        </li>
                                        <li>
                                            <b>Collaborative Approach:</b> Pediatric surgeons often work closely with
                                            other pediatric specialists, including pediatricians, neonatologists,
                                            pediatric anesthesiologists, pediatric radiologists, pediatric oncologists,
                                            and pediatric intensivists, to provide comprehensive care for children with
                                            complex medical needs. They may also collaborate with genetic counselors,
                                            social workers, and rehabilitation therapists to address the diverse needs
                                            of pediatric patients and their families.
                                        </li>
                                        <li>
                                            <b>Family-Centered Care:</b> Pediatric surgeons understand the importance of
                                            family-centered care and strive to involve parents and caregivers in the
                                            decision-making process regarding their child's treatment plan. They provide
                                            education, support, and guidance to families throughout the surgical
                                            journey, addressing their concerns and empowering them to actively
                                            participate in their child's care.
                                        </li>
                                        <li>
                                            <b>Specialized Training:</b> Pediatric surgeons undergo extensive training
                                            beyond medical school, completing a residency in general surgery followed by
                                            additional fellowship training in pediatric surgery. This specialized
                                            training equips them with the knowledge, skills, and experience necessary to
                                            manage the unique surgical challenges of pediatric patients.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Pediatric surgery is a dynamic field with
                                            ongoing research aimed at improving surgical techniques, enhancing outcomes,
                                            and advancing the care of pediatric surgical patients. Pediatric surgeons
                                            may participate in clinical trials, contribute to scientific publications,
                                            and collaborate with researchers to drive innovation in pediatric surgical
                                            practice.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in pediatric surgery services at Lion Tarachand Bapa
                                        Hospital, I recommend contacting the hospital directly or visiting their website
                                        for more information about the availability of these services and the specific
                                        pediatric surgical conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-11">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Gynecology</h3>
                                    <p class="fst-italic">
                                        Gynecology is a medical specialty focused on the health of the female
                                        reproductive system, including the uterus, ovaries, fallopian tubes, cervix, and
                                        vagina. Gynecologists are physicians who specialize in this field and are
                                        trained to diagnose, treat, and manage a wide range of gynecological conditions.
                                    </p>
                                    <img src="{{asset('assets/img/department/Gynecologydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Gynecologists provide care for women across the
                                            lifespan, addressing various aspects of reproductive health, menstrual
                                            health, contraception, pregnancy, childbirth, and menopause. They diagnose
                                            and treat gynecological conditions such as:
                                            <ul style="list-style: disc;">
                                                <li>Menstrual disorders (such as irregular periods, heavy menstrual
                                                    bleeding, and menstrual pain)</li>
                                                <li>Pelvic pain and endometriosis</li>
                                                <li>Uterine fibroids and ovarian cysts</li>
                                                <li>Pelvic inflammatory disease (PID) and sexually transmitted
                                                    infections (STIs)</li>
                                                <li>Gynecological cancers (such as cervical cancer, ovarian cancer, and
                                                    uterine cancer)</li>
                                                <li>Infertility and reproductive endocrinology</li>
                                                <li>Menopausal symptoms and hormone replacement therapy</li>

                                            </ul>
                                        </li>
                                        <li>
                                            <b>Well-Woman Care:</b> Gynecologists provide preventive care and wellness
                                            exams for women, including annual well-woman visits, pelvic exams, Pap
                                            smears (cervical cancer screening), breast exams, and screening for sexually
                                            transmitted infections. They offer guidance on contraception options, family
                                            planning, and preconception counseling to help women make informed decisions
                                            about their reproductive health.
                                        </li>
                                        <li>
                                            <b>Pregnancy and Obstetrics:</b> While obstetrics is a separate specialty,
                                            many gynecologists also provide obstetric care for pregnant women. They
                                            offer prenatal care, monitor fetal development, manage pregnancy
                                            complications, and provide childbirth services, including vaginal deliveries
                                            and cesarean sections (C-sections). Gynecologists may work closely with
                                            obstetricians, maternal-fetal medicine specialists, and neonatologists to
                                            ensure safe and healthy pregnancies and deliveries.
                                        </li>
                                        <li>
                                            <b>Minimally Invasive Surgery:</b> Gynecologists are trained in minimally
                                            invasive surgical techniques, including laparoscopy and hysteroscopy, to
                                            perform diagnostic procedures and treat gynecological conditions. Minimally
                                            invasive surgery offers benefits such as smaller incisions, reduced pain,
                                            faster recovery, and shorter hospital stays compared to traditional open
                                            surgery.
                                        </li>
                                        <li>
                                            <b>Gynecological Oncology:</b> Gynecologic oncologists are specialized
                                            gynecologists who focus on the diagnosis and treatment of gynecological
                                            cancers, including ovarian cancer, cervical cancer, uterine cancer, vaginal
                                            cancer, and vulvar cancer. They provide comprehensive cancer care, including
                                            surgery, chemotherapy, radiation therapy, and palliative care, and
                                            collaborate with other cancer specialists to develop personalized treatment
                                            plans for patients.
                                        </li>
                                        <li>
                                            <b>Family Planning and Contraception:</b> Gynecologists offer family
                                            planning services and contraceptive counseling to help women choose
                                            contraceptive methods that align with their reproductive goals and lifestyle
                                            preferences. They provide information about various contraceptive options,
                                            including oral contraceptives, intrauterine devices (IUDs), contraceptive
                                            implants, and sterilization procedures.
                                        </li>
                                        <li>
                                            <b>Continuing Care:</b> Gynecologists provide ongoing care for women
                                            throughout their reproductive years, addressing evolving health needs,
                                            managing chronic conditions, and promoting overall wellness. They foster
                                            trusted relationships with their patients, offering support, guidance, and
                                            compassionate care across different life stages.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in gynecology services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific
                                        gynecological conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-12">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Urology</h3>
                                    <p class="fst-italic">
                                        Urology is a medical and surgical specialty focused on the diagnosis, treatment,
                                        and management of disorders affecting the urinary tract system in both males and
                                        females, as well as the male reproductive system. Urologists are physicians who
                                        specialize in this field and are trained to address a wide range of urological
                                        conditions.
                                    </p>
                                    <img src="{{asset('assets/img/department/urologydept.png')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Urologists diagnose and treat various urological
                                            conditions, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>Urinary tract infections (UTIs)</li>
                                                <li>Kidney stones</li>
                                                <li>Benign prostatic hyperplasia (BPH)</li>
                                                <li>Urinary incontinence</li>
                                                <li>Erectile dysfunction</li>
                                                <li>Male infertility</li>
                                                <li>Prostate disorders (such as prostatitis and prostate cancer)</li>
                                                <li>Bladder disorders (such as interstitial cystitis and bladder cancer)
                                                </li>
                                                <li>Kidney disorders (such as chronic kidney disease and kidney cancer)
                                                </li>
                                                <li>Urethral disorders (such as urethral stricture)</li>
                                                <li>Testicular disorders (such as testicular cancer and hydrocele)</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Urologists use various diagnostic tools and
                                            procedures to evaluate patients with urological symptoms. These may include:
                                            <ul style="list-style: disc;">
                                                <li>Physical examination</li>
                                                <li>Urinalysis and urine culture</li>
                                                <li>Imaging studies (such as ultrasound, CT scan, MRI, and X-rays)</li>
                                                <li>Urodynamic testing to assess bladder function</li>
                                                <li>Cystoscopy to examine the bladder and urethra</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in urology vary depending
                                            on the specific condition and its underlying cause. Urologists may prescribe
                                            medications, recommend lifestyle modifications, perform minimally invasive
                                            procedures, or perform surgical interventions to manage urological
                                            conditions. Common treatment modalities include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Medications for UTIs, erectile dysfunction, and prostate disorders
                                                </li>
                                                <li>
                                                    Extracorporeal shock wave lithotripsy (ESWL) or endoscopic
                                                    procedures for kidney stones
                                                </li>
                                                <li>
                                                    Transurethral resection of the prostate (TURP) for BPH
                                                </li>
                                                <li>
                                                    Minimally invasive procedures for urinary incontinence (such as
                                                    sling procedures or bulking agents)
                                                </li>
                                                <li>
                                                    Robotic-assisted laparoscopic surgery for prostate cancer, bladder
                                                    cancer, and other urological cancers
                                                </li>
                                                <li>
                                                    Radiation therapy or chemotherapy for urological cancers
                                                </li>
                                                <li>
                                                    Andrological procedures for male infertility or erectile dysfunction
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Pediatric Urology:</b> Pediatric urologists specialize in the diagnosis
                                            and treatment of urological conditions in children, including congenital
                                            anomalies, urinary tract infections, undescended testes, hypospadias, and
                                            vesicoureteral reflux. They provide comprehensive care for pediatric
                                            patients, often collaborating with other pediatric specialists to address
                                            complex medical needs.
                                        </li>
                                        <li>
                                            <b>Continence and Pelvic Health:</b> Urologists also specialize in
                                            continence and pelvic health, focusing on the diagnosis and treatment of
                                            conditions such as urinary incontinence, pelvic organ prolapse, and pelvic
                                            floor dysfunction. They may offer a range of treatment options, including
                                            behavioral therapies, pelvic floor exercises, medications, and surgical
                                            interventions.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Urology is a dynamic field with ongoing
                                            research aimed at advancing diagnostic techniques, treatment modalities, and
                                            surgical innovations. Urologists may participate in clinical trials,
                                            contribute to scientific publications, and collaborate with researchers to
                                            improve outcomes for patients with urological conditions.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in urology services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific urological
                                        conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-13">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Nephrology</h3>
                                    <p class="fst-italic">
                                        Nephrology is a medical specialty focused on the diagnosis, treatment, and
                                        management of kidney disorders and conditions related to the kidneys.
                                        Nephrologists are physicians who specialize in this field and are trained to
                                        address a wide range of kidney-related issues.
                                    </p>
                                    <img src="{{asset('assets/img/department/nephrologydept.jfif')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Nephrologists diagnose and treat various
                                            kidney-related conditions, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>Chronic kidney disease (CKD)</li>
                                                <li>Acute kidney injury (AKI)</li>
                                                <li>Glomerulonephritis</li>
                                                <li>Kidney stones</li>
                                                <li>Polycystic kidney disease (PKD)</li>
                                                <li>Nephrotic syndrome</li>
                                                <li>Hypertension (high blood pressure) related to kidney disease</li>
                                                <li>Electrolyte imbalances (such as hyperkalemia and hyponatremia)</li>
                                                <li>Acid-base disorders (such as metabolic acidosis and alkalosis)</li>
                                                <li>End-stage renal disease (ESRD) requiring dialysis or kidney
                                                    transplantation</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Nephrologists use various diagnostic tools and
                                            procedures to evaluate patients with kidney-related symptoms and conditions.
                                            These may include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Blood tests to assess kidney function (such as serum creatinine,
                                                    blood urea nitrogen, and glomerular filtration rate)
                                                </li>
                                                <li>
                                                    Urine tests to detect proteinuria, hematuria, and other
                                                    abnormalities
                                                </li>
                                                <li>
                                                    Imaging studies (such as ultrasound, CT scan, MRI, and kidney
                                                    biopsy) to evaluate kidney structure and function
                                                </li>
                                                <li>
                                                    Kidney function tests (such as creatinine clearance and urine
                                                    osmolality)
                                                </li>
                                                <li>
                                                    Specialized tests to assess electrolyte levels, acid-base balance,
                                                    and fluid status
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in nephrology vary
                                            depending on the specific condition and its underlying cause. Nephrologists
                                            may prescribe medications, recommend lifestyle modifications, provide
                                            dietary counseling, and manage complications associated with kidney disease.
                                            Common treatment modalities include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Blood pressure management with antihypertensive medications to
                                                    protect kidney function
                                                </li>
                                                <li>
                                                    Medications to control symptoms and slow the progression of kidney
                                                    disease
                                                </li>
                                                <li>
                                                    Dialysis (hemodialysis or peritoneal dialysis) to replace lost
                                                    kidney function in patients with ESRD
                                                </li>
                                                <li>
                                                    Kidney transplantation for eligible candidates with ESRD to restore
                                                    kidney function and improve quality of life
                                                </li>
                                                <li>
                                                    Management of complications such as anemia, bone disease,
                                                    electrolyte imbalances, and cardiovascular disease associated with
                                                    kidney disease
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Chronic Kidney Disease Management:</b> Nephrologists play a key role in
                                            the management of chronic kidney disease, a progressive condition
                                            characterized by the gradual loss of kidney function over time. They monitor
                                            patients' kidney function, assess risk factors for disease progression, and
                                            implement interventions to slow the decline in kidney function and reduce
                                            the risk of complications.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Nephrology is a dynamic field with ongoing
                                            research aimed at understanding the mechanisms of kidney disease, developing
                                            new treatment modalities, and improving outcomes for patients with kidney
                                            disorders. Nephrologists may participate in clinical trials, contribute to
                                            scientific publications, and collaborate with researchers to advance the
                                            understanding and management of kidney disease.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in nephrology services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific
                                        kidney-related conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-14">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Orthopedic</h3>
                                    <p class="fst-italic">
                                        Orthopedics is a medical specialty focused on the diagnosis, treatment, and
                                        management of musculoskeletal conditions, which involve the bones, joints,
                                        muscles, ligaments, tendons, and nerves. Orthopedic surgeons are physicians who
                                        specialize in this field and are trained to address a wide range of orthopedic
                                        issues.
                                    </p>
                                    <img src="{{asset('assets/img/department/Orthopedicdept.webp')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Orthopedic surgeons diagnose and treat various
                                            musculoskeletal conditions and injuries, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>Fractures and dislocations</li>
                                                <li>Osteoarthritis and rheumatoid arthritis</li>
                                                <li>Sports injuries (such as ligament tears and tendon ruptures)</li>
                                                <li>Degenerative joint diseases</li>
                                                <li>Spinal disorders (such as herniated discs and spinal stenosis)</li>
                                                <li>Bone tumors and musculoskeletal infections</li>
                                                <li>Congenital deformities (such as clubfoot and scoliosis)</li>
                                                <li>Trauma injuries (such as fractures, sprains, and strains)</li>
                                                <li>Orthopedic conditions affecting children (pediatric orthopedics)
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Orthopedic surgeons use various diagnostic
                                            tools and procedures to evaluate patients with musculoskeletal symptoms and
                                            conditions. These may include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Physical examination to assess range of motion, strength, and joint
                                                    stability
                                                </li>
                                                <li>
                                                    Imaging studies (such as X-rays, CT scans, MRI scans, and bone
                                                    scans) to visualize bone and soft tissue structures
                                                </li>
                                                <li>
                                                    Arthroscopy, a minimally invasive procedure using a small camera to
                                                    examine the inside of a joint
                                                </li>
                                                <li>
                                                    Electromyography (EMG) and nerve conduction studies to assess nerve
                                                    function and muscle activity
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in orthopedics vary
                                            depending on the specific condition and its severity. Orthopedic surgeons
                                            may prescribe medications, recommend physical therapy, perform minimally
                                            invasive procedures, or perform surgical interventions to manage
                                            musculoskeletal conditions. Common treatment modalities include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Medications for pain relief, inflammation reduction, and infection
                                                    control
                                                </li>
                                                <li>
                                                    Physical therapy and rehabilitation exercises to improve strength,
                                                    flexibility, and mobility
                                                </li>
                                                <li>
                                                    Orthotics (such as braces and splints) to support and stabilize
                                                    injured or weakened joints
                                                </li>
                                                <li>
                                                    Injection therapies (such as corticosteroid injections or
                                                    viscosupplementation) to reduce pain and inflammation in joints
                                                </li>
                                                <li>
                                                    Arthroscopic surgery for joint repair, reconstruction, or
                                                    debridement
                                                </li>
                                                <li>
                                                    Open surgery for fracture fixation, joint replacement, spinal
                                                    fusion, and soft tissue repair
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Joint Replacement Surgery:</b> Orthopedic surgeons specialize in joint
                                            replacement surgery, a procedure to remove damaged or diseased joints and
                                            replace them with artificial implants (prostheses). Common joint replacement
                                            surgeries include total knee replacement, total hip replacement, total
                                            shoulder replacement, and partial knee replacement.
                                        </li>
                                        <li>
                                            <b>Pediatric Orthopedics:</b> Pediatric orthopedic surgeons specialize in
                                            the diagnosis and treatment of musculoskeletal conditions affecting
                                            children, including congenital deformities, growth plate injuries,
                                            developmental hip dysplasia, and scoliosis. They provide comprehensive care
                                            for pediatric patients, often collaborating with other pediatric specialists
                                            to address complex medical needs.
                                        </li>
                                        <li>
                                            <b>Sports Medicine:</b> Orthopedic surgeons with expertise in sports
                                            medicine focus on the diagnosis, treatment, and prevention of sports-related
                                            injuries and conditions. They provide specialized care for athletes,
                                            including surgical and non-surgical interventions to optimize performance
                                            and facilitate safe return to sports activities.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Orthopedics is a dynamic field with
                                            ongoing research aimed at improving surgical techniques, developing new
                                            treatment modalities, and enhancing outcomes for patients with
                                            musculoskeletal conditions. Orthopedic surgeons may participate in clinical
                                            trials, contribute to scientific publications, and collaborate with
                                            researchers to advance the understanding and management of orthopedic
                                            disorders.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in orthopedic services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific orthopedic
                                        conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-15">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Ophtalmology</h3>
                                    <p class="fst-italic">
                                        Ophthalmology is a medical specialty focused on the diagnosis, treatment, and
                                        management of eye-related conditions and diseases. Ophthalmologists are
                                        physicians who specialize in this field and are trained to address a wide range
                                        of eye problems.
                                    </p>
                                    <img src="{{asset('assets/img/department/ophthalmologydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Ophthalmologists diagnose and treat various eye
                                            conditions and diseases, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Refractive errors (such as nearsightedness, farsightedness, and
                                                    astigmatism)
                                                </li>
                                                <li>
                                                    Cataracts (clouding of the eye's natural lens)
                                                </li>
                                                <li>
                                                    Glaucoma (increased pressure within the eye that can lead to optic
                                                    nerve damage)
                                                </li>
                                                <li>
                                                    Age-related macular degeneration (progressive deterioration of the
                                                    central part of the retina)
                                                </li>
                                                <li>
                                                    Diabetic retinopathy (damage to the blood vessels in the retina due
                                                    to diabetes)
                                                </li>
                                                <li>
                                                    Retinal detachment (separation of the retina from the back of the
                                                    eye)
                                                </li>
                                                <li>
                                                    Corneal disorders (such as keratoconus and corneal dystrophies)
                                                </li>
                                                <li>
                                                    Ocular surface diseases (such as dry eye syndrome and
                                                    conjunctivitis)
                                                </li>
                                                <li>
                                                    Eye trauma and injuries
                                                </li>
                                                <li>
                                                    Pediatric eye conditions (such as amblyopia, strabismus, and
                                                    congenital cataracts)
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Ophthalmologists use various diagnostic tools
                                            and procedures to evaluate patients with eye-related symptoms and
                                            conditions. These may include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Visual acuity testing to assess vision clarity
                                                </li>
                                                <li>
                                                    Refraction tests to determine the need for glasses or contact lenses
                                                </li>
                                                <li>
                                                    Intraocular pressure measurement (tonometry) to screen for glaucoma
                                                </li>
                                                <li>
                                                    Fundus examination to assess the back of the eye, including the
                                                    retina and optic nerve
                                                </li>
                                                <li>
                                                    Optical coherence tomography (OCT) to obtain detailed
                                                    cross-sectional images of the retina
                                                </li>
                                                <li>
                                                    Fluorescein angiography to evaluate blood flow in the retina and
                                                    choroid
                                                </li>
                                                <li>
                                                    Gonioscopy to examine the drainage angle of the eye in glaucoma
                                                    patients
                                                </li>
                                                <li>
                                                    Ultrasound imaging (ultrasonography) to assess the structures inside
                                                    the eye
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in ophthalmology vary
                                            depending on the specific condition and its severity. Ophthalmologists may
                                            prescribe medications, recommend lifestyle modifications, perform laser
                                            procedures, or perform surgical interventions to manage eye-related
                                            conditions. Common treatment modalities include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Prescription eyeglasses or contact lenses to correct refractive
                                                    errors
                                                </li>
                                                <li>
                                                    Eye drops or oral medications to manage glaucoma, dry eye syndrome,
                                                    and other eye disorders
                                                </li>
                                                <li>
                                                    Laser therapy (such as LASIK, PRK, and photocoagulation) for
                                                    refractive surgery, glaucoma treatment, and retinal disorders
                                                </li>
                                                <li>
                                                    Intraocular injections (such as anti-VEGF injections) for retinal
                                                    diseases like age-related macular degeneration and diabetic
                                                    retinopathy
                                                </li>
                                                <li>
                                                    Cataract surgery to remove the cloudy lens and replace it with an
                                                    artificial intraocular lens (IOL)
                                                </li>
                                                <li>
                                                    Vitrectomy surgery for retinal detachment repair, macular hole
                                                    closure, and diabetic retinopathy treatment
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Pediatric Ophthalmology:</b> Pediatric ophthalmologists specialize in the
                                            diagnosis and treatment of eye conditions in children. They provide
                                            comprehensive eye care for pediatric patients, including the management of
                                            amblyopia (lazy eye), strabismus (eye misalignment), congenital cataracts,
                                            and genetic eye disorders.
                                        </li>
                                        <li>
                                            <b>Continuing Care:</b> Ophthalmologists provide ongoing care for patients
                                            with chronic eye conditions, monitoring their progress, adjusting treatment
                                            plans as needed, and addressing any complications or concerns that arise
                                            over time. They emphasize the importance of regular eye exams and preventive
                                            measures to maintain optimal eye health and vision.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Ophthalmology is a rapidly evolving field
                                            with ongoing research aimed at understanding the mechanisms of eye diseases,
                                            developing new treatment modalities, and improving outcomes for patients
                                            with vision disorders. Ophthalmologists may participate in clinical trials,
                                            contribute to scientific publications, and collaborate with researchers to
                                            advance the understanding and management of eye conditions.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in ophthalmology services at Lion Tarachand Bapa Hospital,
                                        I recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific eye
                                        conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-16">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Dermatology</h3>
                                    <p class="fst-italic">
                                        Dermatology is a medical specialty focused on the diagnosis, treatment, and
                                        management of disorders affecting the skin, hair, nails, and mucous membranes.
                                        Dermatologists are physicians who specialize in this field and are trained to
                                        address a wide range of dermatological conditions.
                                    </p>
                                    <img src="{{asset('assets/img/department/dermatologydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Dermatologists diagnose and treat various skin
                                            conditions and diseases, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>Acne</li>
                                                <li>Eczema (atopic dermatitis)</li>
                                                <li>Psoriasis</li>
                                                <li>Dermatitis (contact dermatitis, seborrheic dermatitis)</li>
                                                <li>Skin infections (bacterial, fungal, viral)</li>
                                                <li>Rosacea</li>
                                                <li>Skin cancer (melanoma, basal cell carcinoma, squamous cell
                                                    carcinoma)</li>
                                                <li>Dermatological manifestations of systemic diseases (such as lupus
                                                    erythematosus and dermatomyositis)</li>
                                                <li>Allergic reactions and skin allergies</li>
                                                <li>Hair and scalp disorders (alopecia, dandruff)</li>
                                                <li>Nail disorders (fungal infections, ingrown nails)</li>

                                            </ul>
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Dermatologists use various diagnostic tools
                                            and procedures to evaluate patients with skin-related symptoms and
                                            conditions. These may include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Visual examination of the skin, hair, and nails
                                                </li>
                                                <li>
                                                    Dermatoscopy (also known as dermoscopy) to examine skin lesions and
                                                    moles in detail
                                                </li>
                                                <li>
                                                    Skin biopsy to obtain tissue samples for further evaluation under a
                                                    microscope
                                                </li>
                                                <li>
                                                    Patch testing to identify allergens causing contact dermatitis
                                                </li>
                                                <li>
                                                    Wood's lamp examination to assess fungal infections and pigmentary
                                                    disorders
                                                </li>
                                                <li>
                                                    Skin prick testing or blood tests to diagnose allergic conditions
                                                    such as urticaria and angioedema
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in dermatology vary
                                            depending on the specific condition and its severity. Dermatologists may
                                            prescribe topical or oral medications, recommend lifestyle modifications,
                                            perform procedures, or provide counseling to manage dermatological
                                            conditions. Common treatment modalities include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Topical corticosteroids, antibiotics, antifungals, and retinoids for
                                                    skin inflammation, infections, and acne
                                                </li>
                                                <li>
                                                    Phototherapy (light therapy) for psoriasis, eczema, and vitiligo
                                                </li>
                                                <li>
                                                    Systemic medications (such as immunosuppressants, biologics, and
                                                    oral retinoids) for severe or recalcitrant skin conditions
                                                </li>
                                                <li>
                                                    Cryotherapy (freezing) or electrocautery for the removal of warts,
                                                    skin tags, and precancerous lesions
                                                </li>
                                                <li>
                                                    Surgical procedures (such as excisional biopsy, Mohs micrographic
                                                    surgery, and laser surgery) for skin cancer treatment and cosmetic
                                                    purposes
                                                </li>
                                                <li>
                                                    Injectable treatments (such as botulinum toxin injections and dermal
                                                    fillers) for wrinkle reduction and facial rejuvenation
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Cosmetic Dermatology:</b> Dermatologists may also specialize in cosmetic
                                            dermatology, focusing on procedures and treatments to enhance the appearance
                                            of the skin, hair, and nails. Common cosmetic dermatology procedures
                                            include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Chemical peels for skin rejuvenation and acne treatment
                                                </li>
                                                <li>
                                                    Laser resurfacing for scar reduction, skin tightening, and pigment
                                                    correction
                                                </li>
                                                <li>
                                                    Cosmetic injectables (such as botulinum toxin and dermal fillers)
                                                    for wrinkle reduction and volume restoration
                                                </li>
                                                <li>
                                                    Microneedling for collagen induction and scar revision
                                                </li>
                                                <li>
                                                    Laser hair removal for permanent hair reduction
                                                </li>
                                                <li>
                                                    Platelet-rich plasma (PRP) therapy for hair restoration and skin
                                                    rejuvenation
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Continuing Care:</b> Dermatologists provide ongoing care for patients
                                            with chronic skin conditions, monitoring their progress, adjusting treatment
                                            plans as needed, and addressing any complications or concerns that arise
                                            over time. They emphasize the importance of sun protection, skin cancer
                                            screening, and preventive measures to maintain skin health and prevent skin
                                            cancer.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Dermatology is a dynamic field with
                                            ongoing research aimed at understanding the pathophysiology of skin
                                            diseases, developing new treatment modalities, and improving outcomes for
                                            patients with dermatological conditions. Dermatologists may participate in
                                            clinical trials, contribute to scientific publications, and collaborate with
                                            researchers to advance the understanding and management of skin disorders.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in dermatology services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific
                                        dermatological conditions and procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-17">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Plastic Surgery</h3>
                                    <p class="fst-italic">
                                        Plastic surgery is a surgical specialty focused on the reconstruction,
                                        restoration, or alteration of the human body. Plastic surgeons are physicians
                                        who specialize in this field and are trained to address a wide range of cosmetic
                                        and reconstructive surgical procedures.
                                    </p>
                                    <img src="{{asset('assets/img/department/plasticsurgerydept.jpg')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Plastic surgeons perform both cosmetic and
                                            reconstructive surgical procedures, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Cosmetic procedures: Facelift, rhinoplasty (nose surgery),
                                                    blepharoplasty (eyelid surgery), breast augmentation, breast
                                                    reduction, liposuction, abdominoplasty (tummy tuck), body
                                                    contouring, buttock augmentation (Brazilian butt lift), and
                                                    injectable treatments (such as Botox and dermal fillers).
                                                </li>
                                                <li>
                                                    Reconstructive procedures: Breast reconstruction following
                                                    mastectomy, cleft lip and palate repair, skin cancer excision and
                                                    reconstruction, burn reconstruction, scar revision, hand surgery,
                                                    microsurgery (free tissue transfer), and gender-affirming surgeries.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Patient Consultation:</b> Plastic surgeons typically begin with a
                                            thorough consultation with the patient to discuss their goals, concerns,
                                            medical history, and expectations for surgery. During the consultation, the
                                            surgeon evaluates the patient's anatomy and provides personalized
                                            recommendations for treatment options, surgical techniques, potential risks,
                                            and expected outcomes.
                                        </li>
                                        <li>
                                            <b>Surgical Techniques:</b> Plastic surgeons utilize a variety of surgical
                                            techniques and approaches tailored to each patient's unique needs and
                                            desired outcomes. These may include traditional open surgery, minimally
                                            invasive procedures, endoscopic surgery, and advanced microsurgical
                                            techniques. The goal is to achieve natural-looking results while minimizing
                                            scarring and preserving function.
                                        </li>
                                        <li>
                                            <b>Preoperative Preparation:</b> Prior to surgery, patients undergo
                                            preoperative evaluations and preparations to ensure they are medically fit
                                            for surgery and anesthesia. This may include blood tests, imaging studies,
                                            medical clearance from other specialists, and cessation of certain
                                            medications or habits (such as smoking) that may interfere with healing.
                                        </li>
                                        <li>
                                            <b>Postoperative Care:</b> Plastic surgeons provide comprehensive
                                            postoperative care to optimize recovery and outcomes. This may include pain
                                            management, wound care, monitoring for complications, and follow-up
                                            appointments to assess healing and address any concerns. Patients are
                                            provided with detailed postoperative instructions and guidance on scar
                                            management, activity restrictions, and resuming normal activities.
                                        </li>
                                        <li>
                                            <b>Patient Safety and Satisfaction:</b> Plastic surgeons prioritize patient
                                            safety and satisfaction throughout the surgical process. They adhere to
                                            strict surgical protocols, utilize state-of-the-art surgical facilities and
                                            equipment, and employ advanced techniques to minimize risks and
                                            complications. Patient education, communication, and support are integral to
                                            achieving successful outcomes and high levels of patient satisfaction.
                                        </li>
                                        <li>
                                            <b>Research and Advancements:</b> Plastic surgery is a dynamic field with
                                            ongoing research aimed at advancing surgical techniques, developing
                                            innovative treatments, and improving patient outcomes. Plastic surgeons may
                                            participate in clinical trials, contribute to scientific publications, and
                                            collaborate with researchers to advance the field of plastic and
                                            reconstructive surgery.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in plastic surgery services at Lion Tarachand Bapa
                                        Hospital, I recommend contacting the hospital directly or visiting their website
                                        for more information about the availability of these services and the specific
                                        cosmetic and reconstructive procedures offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-18">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Dentistry</h3>
                                    <p class="fst-italic">
                                        Dentistry is a branch of medicine that focuses on the health of the teeth, gums,
                                        mouth, and associated structures. Dentists are healthcare professionals who
                                        specialize in this field and provide a range of oral health services to
                                        patients.
                                    </p>
                                    <img src="{{asset('assets/img/department/Dentistrydept.jfif')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Dentists diagnose, prevent, and treat various oral
                                            health conditions and diseases, including but not limited to:
                                            <ul style="list-style: disc;">
                                                <li>Dental caries (tooth decay)</li>
                                                <li>Periodontal (gum) disease</li>
                                                <li>Malocclusion (misalignment of teeth or jaws)</li>
                                                <li>Temporomandibular joint (TMJ) disorders</li>
                                                <li>Oral infections (such as abscesses and oral thrush)</li>
                                                <li>Tooth erosion and wear</li>
                                                <li>Oral cancers and precancerous lesions</li>
                                                <li>Oral manifestations of systemic diseases (such as diabetes and
                                                    HIV/AIDS)</li>
                                                <li>Traumatic injuries to the teeth, mouth, and jaw</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Preventive Care:</b> Dentists emphasize the importance of preventive care
                                            to maintain oral health and prevent dental problems. This includes regular
                                            dental check-ups, professional cleanings, oral hygiene instructions (such as
                                            brushing and flossing techniques), fluoride treatments, dental sealants, and
                                            dietary counseling to reduce the risk of cavities and gum disease.
                                        </li>
                                        <li>
                                            <b>Diagnostic Procedures:</b> Dentists use various diagnostic tools and
                                            procedures to assess the oral health status of patients. These may include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Visual examination of the mouth, teeth, and gums
                                                </li>
                                                <li>
                                                    Dental X-rays to detect cavities, bone loss, and other abnormalities
                                                    not visible to the naked eye
                                                </li>
                                                <li>
                                                    Periodontal probing to measure gum pocket depths and assess gum
                                                    health
                                                </li>
                                                <li>
                                                    Oral cancer screening examinations to detect signs of abnormal
                                                    tissue growth
                                                </li>
                                                <li>
                                                    Impressions or digital scans of the teeth and jaws for orthodontic
                                                    evaluations and prosthodontic treatments
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Treatment approaches in dentistry vary
                                            depending on the specific condition and its severity. Dentists may provide a
                                            range of treatment options, including:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Dental fillings (such as amalgam or composite fillings) to restore
                                                    teeth affected by cavities
                                                </li>
                                                <li>
                                                    Dental crowns and bridges to restore damaged or missing teeth
                                                </li>
                                                <li>
                                                    Root canal therapy to save infected or inflamed teeth
                                                </li>
                                                <li>
                                                    Tooth extractions for severely decayed, damaged, or impacted teeth
                                                </li>
                                                <li>
                                                    Periodontal treatments (such as scaling and root planing) to manage
                                                    gum disease
                                                </li>
                                                <li>
                                                    Orthodontic treatments (such as braces or clear aligners) to correct
                                                    malocclusions and straighten teeth
                                                </li>
                                                <li>
                                                    Prosthodontic treatments (such as dentures or dental implants) to
                                                    replace missing teeth and restore oral function and aesthetics
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Cosmetic Dentistry:</b> Dentists may offer cosmetic dental procedures to
                                            enhance the appearance of the smile, including teeth whitening, dental
                                            veneers, dental bonding, and gum contouring. These treatments can improve
                                            the color, shape, size, and alignment of teeth, resulting in a more
                                            aesthetically pleasing smile.
                                        </li>
                                        <li>
                                            <b>Sedation Dentistry:</b> Dentists may provide sedation options (such as
                                            nitrous oxide, oral sedatives, or intravenous sedation) for patients with
                                            dental anxiety or phobia, as well as for complex dental procedures or
                                            patients with special needs. Sedation dentistry can help patients feel more
                                            relaxed and comfortable during dental treatment.
                                        </li>
                                        <li>
                                            <b>Continuing Care:</b> Dentists emphasize the importance of ongoing dental
                                            care and maintenance to preserve oral health and prevent future dental
                                            problems. They provide personalized treatment plans, regular follow-up
                                            appointments, and patient education to empower individuals to take control
                                            of their oral health and maintain healthy smiles for life.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in dental services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific dental
                                        treatments offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-19">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>NICU</h3>
                                    <p class="fst-italic">
                                        The Neonatal Intensive Care Unit (NICU) is a specialized unit within hospitals
                                        that provides intensive medical care for newborn infants, particularly those who
                                        are premature, critically ill, or have medical conditions requiring specialized
                                        treatment.
                                    </p>
                                    <img src="{{asset('assets/img/department/nicudept.jfif" alt="" class="img')}}-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Care:</b> NICUs are equipped to provide comprehensive medical
                                            care for newborns, including:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Monitoring of vital signs (such as heart rate, breathing rate, and
                                                    oxygen saturation)
                                                </li>
                                                <li>
                                                    Respiratory support (such as mechanical ventilation, continuous
                                                    positive airway pressure [CPAP], and supplemental oxygen)
                                                </li>
                                                <li>
                                                    Temperature regulation (incubators, radiant warmers)
                                                </li>
                                                <li>
                                                    Feeding support (intravenous fluids, tube feeding, or specialized
                                                    feeding techniques)
                                                </li>
                                                <li>
                                                    Management of infections, jaundice, and other medical conditions
                                                </li>
                                                <li>
                                                    Neurological monitoring and management of neurologic conditions
                                                </li>
                                                <li>
                                                    Developmental care to support the growth and development of
                                                    premature infants
                                                </li>
                                                <li>
                                                    Family-centered care, including education and support for parents
                                                    and family members
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Levels of Care:</b> NICUs are categorized into different levels based on
                                            the complexity of care they provide:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Level I (basic care): Provides care for healthy newborns and infants
                                                    with stable medical conditions, typically located in community
                                                    hospitals.
                                                </li>
                                                <li>
                                                    Level II (special care nursery): Provides care for infants with
                                                    moderate medical conditions, such as prematurity or feeding
                                                    difficulties, and may have limited capabilities for respiratory
                                                    support and neonatal surgery.
                                                </li>
                                                <li>
                                                    Level III (neonatal intensive care unit): Provides comprehensive
                                                    care for critically ill or premature infants requiring advanced
                                                    medical interventions, including respiratory support, neonatal
                                                    surgery, and subspecialty consultations. Level III NICUs are
                                                    typically located in tertiary care or academic medical centers.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Multidisciplinary Team:</b> NICU care is provided by a multidisciplinary
                                            team of healthcare professionals, including neonatologists (pediatricians
                                            specializing in neonatal care), neonatal nurses, respiratory therapists,
                                            pediatric surgeons, pediatric subspecialists (such as pediatric
                                            cardiologists, neurologists, and gastroenterologists), pharmacists,
                                            dietitians, social workers, and developmental specialists.
                                        </li>
                                        <li>
                                            <b>Family-Centered Care:</b> NICUs recognize the importance of family
                                            involvement in the care of newborn infants and strive to provide
                                            family-centered care. This includes open communication with parents,
                                            involvement in decision-making regarding their infant's care, support for
                                            bonding and attachment, and resources for parent education and emotional
                                            support.
                                        </li>
                                        <li>
                                            <b>Transport Services:</b> Many NICUs have specialized transport teams and
                                            equipment to safely transport critically ill newborns from referring
                                            hospitals to the NICU for higher-level care. These teams are trained to
                                            provide advanced life support during transport and coordinate with referring
                                            healthcare providers to ensure continuity of care.
                                        </li>
                                        <li>
                                            <b>Follow-Up Care:</b> NICUs often provide follow-up care and developmental
                                            assessments for infants after discharge to monitor their growth,
                                            development, and long-term outcomes. This may include neurodevelopmental
                                            evaluations, hearing and vision screenings, and referrals to early
                                            intervention services as needed.
                                        </li>
                                        <li>
                                            <b>Research and Education:</b> NICUs are often involved in research studies
                                            and quality improvement initiatives aimed at advancing neonatal care
                                            practices, improving outcomes for premature and critically ill infants, and
                                            enhancing family-centered care. NICU staff members also participate in
                                            ongoing education and training to stay abreast of advances in neonatal
                                            medicine and technology.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in NICU services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the NICU facilities, capabilities, and admission criteria.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-20">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>Physiotherapy</h3>
                                    <p class="fst-italic">
                                        Physiotherapy, also known as physical therapy, is a healthcare profession
                                        focused on helping people restore movement and function, alleviate pain, and
                                        prevent disability through physical intervention, exercise, and education.
                                        Physiotherapists, or physical therapists, are trained healthcare professionals
                                        who specialize in providing personalized treatment plans tailored to each
                                        individual's needs.
                                    </p>
                                    <img src="{{asset('assets/img/department/Physiotherapydept.jfif')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Scope of Practice:</b> Physiotherapists assess, diagnose, and treat a
                                            wide range of musculoskeletal, neurological, cardiopulmonary, and pediatric
                                            conditions. Common conditions treated by physiotherapists include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Musculoskeletal injuries (such as sprains, strains, and fractures)
                                                </li>
                                                <li>
                                                    Back and neck pain
                                                </li>
                                                <li>
                                                    Arthritis
                                                </li>
                                                <li>
                                                    Sports injuries
                                                </li>
                                                <li>
                                                    Neurological conditions (such as stroke, spinal cord injury, and
                                                    multiple sclerosis)
                                                </li>
                                                <li>
                                                    Respiratory conditions (such as chronic obstructive pulmonary
                                                    disease [COPD] and cystic fibrosis)
                                                </li>
                                                <li>
                                                    Pediatric conditions (such as cerebral palsy and developmental
                                                    delays)
                                                </li>
                                                <li>
                                                    Post-surgical rehabilitation (such as joint replacement surgery and
                                                    spinal surgery)
                                                </li>
                                                <li>
                                                    Work-related injuries
                                                </li>
                                                <li>
                                                    Geriatric conditions (such as falls and balance disorders)
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Assessment and Evaluation:</b> Physiotherapists perform comprehensive
                                            assessments to identify impairments, functional limitations, and
                                            participation restrictions. Assessment techniques may include:
                                            <ul style="list-style: disc;">
                                                <li>Patient history taking</li>
                                                <li>Physical examination</li>
                                                <li>Range of motion measurements</li>
                                                <li>Muscle strength testing</li>
                                                <li>Balance and coordination assessments</li>
                                                <li>Functional mobility assessments</li>
                                                <li>Gait analysis</li>
                                                <li>Specialized tests and measures based on the individual's condition
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Treatment Modalities:</b> Physiotherapists use a variety of treatment
                                            modalities and techniques to address patients' needs and goals. These may
                                            include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Therapeutic exercise programs to improve strength, flexibility,
                                                    endurance, and range of motion
                                                </li>
                                                <li>
                                                    Manual therapy techniques (such as joint mobilization, soft tissue
                                                    mobilization, and massage) to reduce pain and improve mobility
                                                </li>
                                                <li>
                                                    Electrotherapy modalities (such as ultrasound, electrical
                                                    stimulation, and TENS) to manage pain and promote tissue healing
                                                </li>
                                                <li>
                                                    Hydrotherapy (aquatic therapy) for rehabilitation and pain
                                                    management in a pool environment
                                                </li>
                                                <li>
                                                    Respiratory therapy techniques (such as breathing exercises and
                                                    airway clearance techniques) to improve lung function and
                                                    respiratory muscle strength
                                                </li>
                                                <li>
                                                    Assistive devices and orthotic prescriptions (such as braces,
                                                    splints, and walking aids) to support mobility and function
                                                </li>
                                                <li>
                                                    Education and counseling on injury prevention, ergonomic principles,
                                                    home exercise programs, and self-management strategies
                                                </li>
                                                <li>
                                                    Functional training to help patients regain independence in
                                                    activities of daily living (ADLs) and return to work, sports, or
                                                    recreational activities
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Individualized Care Plans:</b> Physiotherapists develop personalized
                                            treatment plans based on the patient's condition, goals, preferences, and
                                            medical history. Treatment plans are dynamic and may be adjusted based on
                                            the individual's progress and response to therapy.
                                        </li>
                                        <li>
                                            <b>Patient Education and Empowerment:</b> Physiotherapists empower patients
                                            to take an active role in their recovery by providing education, guidance,
                                            and support throughout the rehabilitation process. This may include teaching
                                            patients proper body mechanics, ergonomic principles, and home exercise
                                            techniques to prevent re-injury and promote long-term health and wellness.
                                        </li>
                                        <li>
                                            <b>Collaborative Care:</b> Physiotherapists work collaboratively with other
                                            healthcare professionals, such as physicians, occupational therapists,
                                            speech therapists, nurses, and psychologists, to provide holistic care and
                                            optimize patient outcomes. They may also collaborate with sports coaches,
                                            trainers, and employers to facilitate safe return to activity and work.
                                        </li>
                                        <li>
                                            <b>Research and Evidence-Based Practice:</b> Physiotherapy is an
                                            evidence-based profession, with ongoing research aimed at advancing clinical
                                            practice, improving treatment outcomes, and enhancing patient care.
                                            Physiotherapists stay up-to-date with the latest research findings and
                                            incorporate evidence-based interventions into their clinical practice.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in physiotherapy services at Lion Tarachand Bapa Hospital,
                                        I recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services and the specific
                                        physiotherapy programs offered.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane" id="tab-21">
                            <div class="row gy-4">
                                <div class="details order-2 order-lg-1">
                                    <h3>CT Scan</h3>
                                    <p class="fst-italic">
                                        A CT scan, also known as computed tomography or CAT scan, is a diagnostic
                                        imaging procedure that uses X-rays and computer technology to create detailed
                                        cross-sectional images of the body. CT scans are valuable tools for diagnosing
                                        and evaluating a wide range of medical conditions, including injuries, diseases,
                                        and abnormalities.
                                    </p>
                                    <img src="{{asset('assets/img/department/ctscandept.webp')}}" alt=""
                                        class="img-fluid">
                                    <ol>
                                        <li>
                                            <b>Purpose:</b> CT scans provide detailed images of internal structures,
                                            allowing healthcare providers to visualize and assess various organs,
                                            tissues, and bones. CT scans can help diagnose conditions such as tumors,
                                            infections, fractures, bleeding, inflammation, and blockages in blood
                                            vessels or airways.
                                        </li>
                                        <li>
                                            <b>Procedure:</b> During a CT scan, the patient lies on a motorized table
                                            that slides into the CT scanner, which resembles a large doughnut-shaped
                                            machine. The scanner emits X-rays as it rotates around the body, capturing
                                            multiple cross-sectional images (slices) from different angles. A computer
                                            then processes the images to create detailed three-dimensional images of the
                                            area being examined.
                                        </li>
                                        <li>
                                            <b>Types of CT Scans:</b> CT scans can be performed on different parts of
                                            the body, depending on the patient's symptoms and medical history. Common
                                            types of CT scans include:
                                            <ul style="list-style: disc;">
                                                <li>
                                                    Head CT: Used to evaluate the brain, skull, and facial structures
                                                    for conditions such as head trauma, stroke, tumors, and intracranial
                                                    bleeding.
                                                </li>
                                                <li>
                                                    Chest CT: Used to assess the lungs, heart, mediastinum, and thoracic
                                                    spine for conditions such as lung cancer, pneumonia, pulmonary
                                                    embolism, and cardiovascular disease.
                                                </li>
                                                <li>
                                                    Abdominal CT: Used to examine the abdominal organs (such as the
                                                    liver, kidneys, pancreas, and intestines) for conditions such as
                                                    abdominal pain, organ enlargement, tumors, and gastrointestinal
                                                    bleeding.
                                                </li>
                                                <li>
                                                    Pelvic CT: Used to evaluate the pelvic organs (such as the bladder,
                                                    uterus, ovaries, and prostate) for conditions such as pelvic pain,
                                                    urinary tract disorders, and gynecological abnormalities.
                                                </li>
                                                <li>
                                                    Whole-body CT: Used for comprehensive evaluation of multiple body
                                                    regions in trauma patients or for cancer staging and surveillance.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <b>Contrast Enhancement:</b> In some cases, a contrast dye may be injected
                                            into a vein (intravenous contrast) or administered orally or rectally (oral
                                            or rectal contrast) to enhance the visibility of certain structures or
                                            abnormalities on the CT images. Contrast-enhanced CT scans are commonly used
                                            to evaluate blood vessels, organs, and tumors.
                                        </li>
                                        <li>
                                            <b>Safety:</b> While CT scans involve exposure to ionizing radiation, the
                                            benefits of diagnostic imaging usually outweigh the potential risks,
                                            especially when a timely and accurate diagnosis is essential for medical
                                            decision-making. Modern CT scanners are designed to minimize radiation dose
                                            while producing high-quality images.
                                        </li>
                                        <li>
                                            <b>Preparation:</b> Depending on the type of CT scan and the area being
                                            examined, patients may be instructed to fast for a certain period before the
                                            procedure or to drink oral contrast solution. Patients should inform their
                                            healthcare provider if they have any allergies, kidney problems, or other
                                            medical conditions that may affect their ability to receive contrast dye.
                                        </li>
                                        <li>
                                            <b>Interpretation of Results:</b> After the CT scan, a radiologist will
                                            interpret the images and generate a report detailing any findings or
                                            abnormalities. The results of the CT scan are typically shared with the
                                            referring healthcare provider, who will discuss the findings with the
                                            patient and recommend appropriate further evaluation or treatment.
                                        </li>
                                    </ol>
                                    <p>
                                        If you're interested in CT scan services at Lion Tarachand Bapa Hospital, I
                                        recommend contacting the hospital directly or visiting their website for more
                                        information about the availability of these services, scheduling appointments,
                                        and any specific preparation instructions.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Departments Section -->
</main>

@extends('Layout.footer')

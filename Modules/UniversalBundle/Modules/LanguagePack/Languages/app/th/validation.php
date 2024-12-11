<?php 
return [
  'accepted' => 'ต้องยอมรับ :attribute',
  'active_url' => ' :attribute ไม่ใช่ URL ที่ถูกต้อง',
  'after' => ' :attribute ต้องเป็นวันที่หลัง :date',
  'after_or_equal' => ' :attribute ต้องเป็นวันที่หลังหรือเท่ากับ :date',
  'alpha' => ' :attribute ต้องประกอบด้วยตัวอักษรเท่านั้น',
  'alpha_dash' => ' :attribute ต้องประกอบด้วยตัวอักษร ตัวเลข และขีดกลางเท่านั้น',
  'alpha_num' => ' :attribute ต้องประกอบด้วยตัวอักษรและตัวเลขเท่านั้น',
  'array' => ' :attribute ต้องเป็นอาร์เรย์',
  'before' => ' :attribute ต้องเป็นวันที่ก่อน :date',
  'before_or_equal' => ' :attribute ต้องเป็นวันที่ก่อนหรือเท่ากับ :date',
  'accepted_if' => 'ต้องยอมรับช่อง :attribute เมื่อ :other คือ :value',
  'ascii' => 'ช่อง :attribute ต้องมีอักขระและตัวเลขและตัวอักษรแบบไบต์เดียวเท่านั้น',
  'between' => [
    'numeric' => ' :attribute ต้องอยู่ระหว่าง :min ถึง :max',
    'file' => ' :attribute ต้องอยู่ระหว่าง :min ถึง :max กิโลไบต์',
    'string' => ' :attribute ต้องอยู่ระหว่างอักขระ :min ถึง :max',
    'array' => ' :attribute ต้องมีรายการระหว่าง :min ถึง :max',
  ],
  'boolean' => 'ช่อง :attribute ต้องเป็นจริงหรือเท็จ',
  'confirmed' => 'การยืนยัน :attribute ไม่ตรงกัน',
  'date' => ' :attribute ไม่ใช่วันที่ที่ถูกต้อง',
  'date_format' => ' :attribute ไม่ตรงกับรูปแบบ :format',
  'different' => ' :attribute และ :other จะต้องต่างกัน',
  'digits' => ' :attribute ต้องเป็น :digits หลัก',
  'digits_between' => ' :attribute ต้องอยู่ระหว่างหลัก :min ถึง :max',
  'dimensions' => ' :attribute มีขนาดภาพที่ไม่ถูกต้อง',
  'distinct' => 'ฟิลด์ :attribute มีค่าซ้ำกัน',
  'email' => ' :attribute ต้องเป็นที่อยู่อีเมลที่ถูกต้อง',
  'invalidEmail' => 'กรุณาใส่อีเมล์ที่ถูกต้อง.',
  'invalidEmailPassword' => 'การผสมอีเมลและรหัสผ่านไม่ถูกต้อง',
  'exists' => ' :attribute ที่เลือกไม่ถูกต้อง',
  'file' => ' :attribute จะต้องเป็นไฟล์',
  'filled' => 'ช่อง :attribute จะต้องมีค่า',
  'image' => ' :attribute ต้องเป็นรูปภาพ',
  'in' => ' :attribute ที่เลือกไม่ถูกต้อง',
  'in_array' => 'ฟิลด์ :attribute ไม่มีอยู่ใน :other',
  'integer' => ' :attribute ต้องเป็นจำนวนเต็ม',
  'ip' => ' :attribute ต้องเป็นที่อยู่ IP ที่ถูกต้อง',
  'json' => ' :attribute ต้องเป็นสตริง JSON ที่ถูกต้อง',
  'current_password' => 'รหัสผ่านไม่ถูกต้อง',
  'date_equals' => 'ช่อง :attribute ต้องเป็นวันที่เท่ากับ :date',
  'decimal' => 'ช่อง :attribute ต้องมีทศนิยม :decimal ตำแหน่ง',
  'declined' => 'ฟิลด์ :attribute จะต้องถูกปฏิเสธ',
  'declined_if' => 'ฟิลด์ :attribute จะต้องถูกปฏิเสธเมื่อ :other คือ :value',
  'doesnt_end_with' => 'ช่อง :attribute ต้องไม่ลงท้ายด้วยรายการใดรายการหนึ่งต่อไปนี้: :values',
  'doesnt_start_with' => 'ช่อง :attribute ต้องไม่ขึ้นต้นด้วยรายการใดรายการหนึ่งต่อไปนี้: :values',
  'ends_with' => 'ช่อง :attribute ต้องลงท้ายด้วยรายการใดรายการหนึ่งต่อไปนี้: :values',
  'enum' => ' :attribute ที่เลือกไม่ถูกต้อง',
  'gt' => [
    'array' => 'ช่อง :attribute ต้องมีรายการมากกว่า :value',
    'file' => 'ฟิลด์ :attribute ต้องมากกว่า :value กิโลไบต์',
    'numeric' => 'ฟิลด์ :attribute ต้องมากกว่า :value',
    'string' => 'ช่อง :attribute ต้องมีอักขระมากกว่า :value ตัว',
  ],
  'gte' => [
    'array' => 'ช่อง :attribute ต้องมีรายการ :value ขึ้นไป',
    'file' => 'ช่อง :attribute ต้องมากกว่าหรือเท่ากับ :value กิโลไบต์',
    'numeric' => 'ช่อง :attribute ต้องมากกว่าหรือเท่ากับ :value',
    'string' => 'ฟิลด์ :attribute ต้องมากกว่าหรือเท่ากับอักขระ :value',
  ],
  'ipv4' => 'ช่อง :attribute ต้องเป็นที่อยู่ IPv4 ที่ถูกต้อง',
  'ipv6' => 'ช่อง :attribute ต้องเป็นที่อยู่ IPv6 ที่ถูกต้อง',
  'lowercase' => 'ฟิลด์ :attribute จะต้องเป็นตัวพิมพ์เล็ก',
  'lt' => [
    'array' => 'ช่อง :attribute ต้องมีรายการน้อยกว่า :value',
    'file' => 'ช่อง :attribute ต้องน้อยกว่า :value กิโลไบต์',
    'numeric' => 'ช่อง :attribute ต้องน้อยกว่า :value',
    'string' => 'ช่อง :attribute ต้องมีอักขระน้อยกว่า :value ตัว',
  ],
  'lte' => [
    'array' => 'ช่อง :attribute ต้องมีรายการไม่เกิน :value',
    'file' => 'ช่อง :attribute ต้องน้อยกว่าหรือเท่ากับ :value กิโลไบต์',
    'numeric' => 'ช่อง :attribute ต้องน้อยกว่าหรือเท่ากับ :value',
    'string' => 'ฟิลด์ :attribute ต้องน้อยกว่าหรือเท่ากับอักขระ :value',
  ],
  'mac_address' => 'ช่อง :attribute ต้องเป็นที่อยู่ MAC ที่ถูกต้อง',
  'max' => [
    'numeric' => ' :attribute ต้องไม่มากกว่า :max',
    'file' => ' :attribute ต้องไม่เกิน :max กิโลไบต์',
    'string' => ' :attribute ต้องมีความยาวไม่เกิน :max ตัวอักษร',
    'array' => ' :attribute ต้องมีรายการไม่เกิน :max',
  ],
  'max_digits' => 'ช่อง :attribute ต้องมีตัวเลขไม่เกิน :max หลัก',
  'mimes' => ' :attribute ต้องเป็นไฟล์ประเภท: :values',
  'mimetypes' => ' :attribute ต้องเป็นไฟล์ประเภท: :values',
  'min' => [
    'numeric' => ' :attribute ต้องมีอย่างน้อย :min',
    'file' => ' :attribute ต้องมีอย่างน้อย :min กิโลไบต์',
    'string' => ' :attribute ต้องมีอักขระอย่างน้อย :min ตัว',
    'array' => ' :attribute ต้องมีอย่างน้อย :min รายการ',
  ],
  'not_in' => ' :attribute ที่เลือกไม่ถูกต้อง',
  'numeric' => ' :attribute ต้องเป็นตัวเลข',
  'present' => 'ต้องมีฟิลด์ :attribute',
  'regex' => 'รูปแบบ :attribute ไม่ถูกต้อง',
  'required' => 'ต้องระบุฟิลด์ :attribute',
  'required_if' => 'ต้องระบุฟิลด์ :attribute เมื่อ :other คือ :value',
  'required_unless' => 'ต้องระบุฟิลด์ :attribute ยกเว้นว่า :other อยู่ใน :values',
  'required_with' => 'จำเป็นต้องมีฟิลด์ :attribute เมื่อมี :values',
  'required_with_all' => 'จำเป็นต้องมีฟิลด์ :attribute เมื่อมี :values',
  'required_without' => 'จำเป็นต้องระบุฟิลด์ :attribute เมื่อไม่มี :values',
  'required_without_all' => 'จำเป็นต้องระบุฟิลด์ :attribute เมื่อไม่มี :values ใดเลย',
  'same' => ' :attribute และ :other ต้องตรงกัน',
  'min_digits' => 'ช่อง :attribute ต้องมีตัวเลขอย่างน้อย :min หลัก',
  'missing' => 'ฟิลด์ :attribute จะต้องหายไป',
  'missing_if' => 'ต้องไม่มีฟิลด์ :attribute เมื่อ :other คือ :value',
  'missing_unless' => 'ต้องไม่มีฟิลด์ :attribute ยกเว้นว่า :other คือ :value',
  'missing_with' => 'ต้องไม่มีฟิลด์ :attribute เมื่อมี :values',
  'missing_with_all' => 'ต้องไม่มีฟิลด์ :attribute เมื่อมี :values',
  'multiple_of' => 'ช่อง :attribute จะต้องเป็นผลคูณของ :value',
  'not_regex' => 'รูปแบบฟิลด์ :attribute ไม่ถูกต้อง',
  'password' => [
    'letters' => 'ช่อง :attribute ต้องมีตัวอักษรอย่างน้อยหนึ่งตัว',
    'mixed' => 'ช่อง :attribute ต้องมีตัวพิมพ์ใหญ่และตัวพิมพ์เล็กอย่างน้อยหนึ่งตัว',
    'numbers' => 'ช่อง :attribute ต้องมีตัวเลขอย่างน้อยหนึ่งตัว',
    'symbols' => 'ช่อง :attribute ต้องมีสัญลักษณ์อย่างน้อยหนึ่งตัว',
    'uncompromised' => ' :attribute ที่ระบุปรากฏในข้อมูลรั่วไหล โปรดเลือก :attribute อื่น',
  ],
  'prohibited' => 'ห้ามใช้ช่อง :attribute',
  'prohibited_if' => 'ห้ามใช้ช่อง :attribute เมื่อ :other คือ :value',
  'prohibited_unless' => 'ห้ามใช้ฟิลด์ :attribute ยกเว้นว่า :other อยู่ใน :values',
  'prohibits' => 'ช่อง :attribute ห้ามไม่ให้ :other แสดง',
  'required_array_keys' => 'ฟิลด์ :attribute ต้องมีรายการสำหรับ: :values',
  'required_if_accepted' => 'ต้องระบุฟิลด์ :attribute เมื่อยอมรับ :other',
  'size' => [
    'numeric' => ' :attribute ต้องเป็น :size',
    'file' => ' :attribute ต้องเป็น :size กิโลไบต์',
    'string' => ' :attribute ต้องเป็นอักขระ :size',
    'array' => ' :attribute ต้องมีรายการ :size',
  ],
  'string' => ' :attribute ต้องเป็นสตริง',
  'timezone' => ' :attribute ต้องเป็นโซนที่ถูกต้อง',
  'unique' => ' :attribute ได้ถูกยึดไปแล้ว',
  'uploaded' => ' :attribute ไม่สามารถอัปโหลดได้',
  'url' => 'รูปแบบ :attribute ไม่ถูกต้อง',
  'email_domain' => ' :attribute ต้องเป็นโดเมนที่ถูกต้อง เช่น gmail.com',
  'slack_webhook' => 'รูปแบบเว็บฮุคไม่ถูกต้อง สำหรับข้อมูลเพิ่มเติมกรุณาเยี่ยมชมนี้',
  'not_custom_fields' => 'คุณไม่สามารถเพิ่มฟิลด์ที่กำหนดเองด้วยป้ายกำกับนี้',
  'starts_with' => 'ช่อง :attribute ต้องขึ้นต้นด้วยรายการใดรายการหนึ่งต่อไปนี้: :values',
  'ulid' => 'ช่อง :attribute ต้องเป็น ULID ที่ถูกต้อง',
  'uppercase' => 'ฟิลด์ :attribute จะต้องเป็นตัวพิมพ์ใหญ่',
  'uuid' => 'ฟิลด์ :attribute ต้องเป็น UUID ที่ถูกต้อง',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'ข้อความที่กำหนดเอง',
    ],
  ],
  'givenDataInvalid' => 'ข้อมูลที่ระบุไม่ถูกต้อง',
  'attributes' => [
    'client_name' => 'ชื่อลูกค้า',
    'client_email' => 'อีเมลลูกค้า',
    'website' => 'เว็บไซต์',
    'name' => 'ชื่อ',
    'email' => 'อีเมล',
    'password' => 'รหัสผ่าน',
    'country' => 'ประเทศ',
    'mobile' => 'มือถือ',
    'category_name' => 'ชื่อหมวดหมู่',
    'title' => 'ชื่อ',
    'details' => 'รายละเอียด',
    'user_id' => 'พนักงาน',
    'category_id' => 'รหัสหมวดหมู่',
    'file' => 'ไฟล์',
    'contact_name' => 'ชื่อผู้ติดต่อ',
    'import_file' => 'นำเข้าไฟล์',
    'remind_time' => 'เตือนเวลา',
    'next_follow_up_date' => 'วันที่ติดตามผลครั้งต่อไป',
    'employee_id' => 'รหัสพนักงาน',
    'department' => 'แผนก',
    'designation' => 'การกำหนด',
    'hourly_rate' => 'อัตราชั่วโมง',
    'joining_date' => 'วันที่เข้าร่วม',
    'last_date' => 'วันสุดท้าย',
    'date_of_birth' => 'วันเกิด',
    'probation_end_date' => 'วันที่สิ้นสุดการทดลองใช้',
    'notice_period_start_date' => 'วันที่เริ่มต้นระยะเวลาการแจ้งเตือน',
    'notice_period_end_date' => 'วันสิ้นสุดระยะเวลาการแจ้ง',
    'internship_end_date' => 'วันที่สิ้นสุดการฝึกงาน',
    'contract_end_date' => 'วันที่สิ้นสุดสัญญา',
    'relationship' => 'ความสัมพันธ์',
    'award' => 'รางวัล',
    'given_to' => 'ให้',
    'award_date' => 'วันที่ได้รับรางวัล',
    'multi_date' => 'หลายวัน',
    'year' => 'ปี',
    'month' => 'เดือน',
    'office_start_time' => 'เวลาเริ่มต้นสำนักงาน',
    'office_end_time' => 'เวลาสิ้นสุดสำนักงาน',
    'shift_short_code' => 'เปลี่ยนรหัสสั้น',
    'color' => 'สี',
    'late_mark_duration' => 'ระยะเวลาเครื่องหมายล่าช้า',
    'clockin_in_day' => 'นาฬิกาในหนึ่งวัน',
    'office_open_days' => 'วันเปิดทำการของสำนักงาน',
    'clock_in_time' => 'นาฬิกาตรงเวลา',
    'clock_out_time' => 'หมดเวลา',
    'working_from' => 'ทำงานจาก',
    'clock_in_ip' => 'นาฬิกาในไอพี',
    'clock_out_ip' => 'โอเวอร์คล็อกไอพี',
    'designation_name' => 'ชื่อการกำหนด',
    'team_name' => 'ชื่อทีม',
    'client_id' => 'รหัสลูกค้า',
    'subject' => 'เรื่อง',
    'amount' => 'จำนวน',
    'contract_type' => 'ประเภทสัญญา',
    'start_date' => 'วันที่เริ่มต้น',
    'first_name' => 'ชื่อจริง',
    'last_name' => 'นามสกุล',
    'signature' => 'ลายเซ็น',
    'image' => 'ภาพ',
    'comment' => 'ความคิดเห็น',
    'project_name' => 'ชื่อโครงการ',
    'hours_allocated' => 'ชั่วโมงที่จัดสรร',
    'deadline' => 'วันกำหนดส่ง',
    'project_budget' => 'งบประมาณโครงการ',
    'currency_id' => 'รหัสสกุลเงิน',
    'project_id' => 'รหัสโครงการ',
    'milestone_title' => 'ชื่อเหตุการณ์สำคัญ',
    'summary' => 'สรุป',
    'discussion_category' => 'หมวดหมู่การอภิปราย',
    'description' => 'คำอธิบาย',
    'priority' => 'ลำดับความสำคัญ',
    'due_date' => 'วันครบกำหนด',
    'repeat_cycles' => 'ทำซ้ำรอบ',
    'dependent_task_id' => 'รหัสงานที่ต้องพึ่งพา',
    'estimate_hours' => 'ประมาณชั่วโมง',
    'estimate_minutes' => 'ประมาณนาที',
    'note' => 'บันทึก',
    'memo' => 'บันทึก',
    'start_time' => 'เวลาเริ่มต้น',
    'end_time' => 'เวลาสิ้นสุด',
    'valid_till' => 'ใช้ได้จนถึง',
    'sub_total' => 'รวมย่อย',
    'total' => 'ทั้งหมด',
    'lead_id' => 'รหัสลูกค้าเป้าหมาย',
    'estimate_number' => 'หมายเลขประมาณการ',
    'invoice_number' => 'เลขใบสั่งของ',
    'issue_date' => 'วันที่ออก',
    'shipping_address' => 'ที่อยู่จัดส่ง',
    'day_of_week' => 'วันของสัปดาห์',
    'day_of_month' => 'วันของเดือน',
    'cn_number' => 'หมายเลขซีเอ็น',
    'invoice_id' => 'รหัสใบแจ้งหนี้',
    'item_name' => 'ชื่อรายการ',
    'purchase_date' => 'วันที่ซื้อ',
    'price' => 'ราคา',
    'billing_cycle' => 'รอบการเรียกเก็บเงิน',
    'paid_on' => 'จ่ายเมื่อ',
    'transaction_id' => 'รหัสธุรกรรม',
    'downloadable_file' => 'ไฟล์ที่ดาวน์โหลดได้',
    'tax_name' => 'ชื่อภาษี',
    'rate_percent' => 'อัตราร้อยละ',
    'status' => 'สถานะ',
    'order_date' => 'วันสั่ง',
    'ticket_subject' => 'เรื่องตั๋ว',
    'ticket_description' => 'คำอธิบายตั๋ว',
    'message' => 'ข้อความ',
    'type' => 'พิมพ์',
    'channel_name' => 'ชื่อช่อง',
    'event_name' => 'ชื่อเหตุการณ์',
    'all_employees' => 'พนักงานทั้งหมด',
    'where' => 'ที่ไหน',
    'event_link' => 'ลิงค์กิจกรรม',
    'heading' => 'หัวเรื่อง',
    'category' => 'หมวดหมู่',
    'company_name' => 'ชื่อ บริษัท',
    'company_email' => 'อีเมลบริษัท',
    'company_phone' => 'โทรศัพท์ของบริษัท',
    'location' => 'ที่ตั้ง',
    'address' => 'ที่อยู่',
    'allowed_file_types' => 'ประเภทไฟล์ที่อนุญาต',
    'allowed_file_size' => 'ขนาดไฟล์ที่อนุญาต',
    'currency_name' => 'ชื่อสกุลเงิน',
    'currency_symbol' => 'สัญลักษณ์สกุลเงิน',
    'usd_price' => 'usd_price',
    'exchange_rate' => 'อัตราแลกเปลี่ยน',
    'currency_code' => 'รหัสสกุลเงิน',
    'invoice_prefix' => 'คำนำหน้าใบแจ้งหนี้',
    'estimate_prefix' => 'คำนำหน้าประมาณ',
    'credit_note_prefix' => 'คำนำหน้าใบลดหนี้',
    'template' => 'แม่แบบ',
    'due_after' => 'วันที่หลังจากนั้น',
    'invoice_terms' => 'เงื่อนไขใบแจ้งหนี้',
    'app_name' => 'ชื่อแอป',
    'code' => 'รหัส',
    'search_keyword' => 'คำค้นหา',
    'reply_heading' => 'ตอบกลับส่วนหัว',
    'reply_text' => 'ข้อความตอบกลับ',
    'send_reminder' => 'ส่งการแจ้งเตือน',
    'remind_to' => 'ส่งการแจ้งเตือน',
    'remind_type' => 'ประเภทเตือน',
    'radius' => 'รัศมี',
    'alert_after' => 'แจ้งเตือนหลังจากนั้น',
    'monthly_report_roles' => 'บทบาทรายงานประจำเดือน',
    'type_name' => 'พิมพ์ชื่อ',
    'leave_number' => 'ทิ้งเบอร์ไว้',
    'monthly_limit' => 'ขีด จำกัด รายเดือน',
    'label' => 'ฉลาก',
    'required' => 'ที่จำเป็น',
    'agent_name' => 'ชื่อตัวแทน',
    'primary_color' => 'สีหลัก',
    'language_name' => 'ชื่อภาษา',
    'language_code' => 'รหัสภาษา',
    'flag' => 'ธง',
    'additional_description' => 'คำอธิบายเพิ่มเติม',
    'consent_description' => 'คำอธิบายความยินยอม',
    'full_name' => 'ชื่อเต็ม',
    'allow_email' => 'อนุญาตอีเมล',
    'email_domain' => 'โดเมนอีเมล',
    'external_link' => 'การเชื่อมโยงภายนอก',
    'filename' => 'ชื่อไฟล์',
    'task_id' => 'รหัสงาน',
    'group_name' => 'ชื่อกลุ่ม',
    'column_name' => 'ชื่อคอลัมน์',
    'label_color' => 'สีฉลาก',
    'clientName' => 'ชื่อลูกค้า',
    'city' => 'เมือง',
    'state' => 'สถานะ',
    'line1' => 'บรรทัดที่ 1',
    'notetext' => 'ข้อความบันทึก',
    'value' => 'ค่า',
    'admin_id' => 'รหัสผู้ดูแลระบบ',
    'reason' => 'เหตุผล',
    'leave_date' => 'วันที่ออก',
    'duration' => 'ระยะเวลา',
    'leave_type_id' => 'ทิ้งรหัสประเภท',
    'occassion' => 'โอกาส',
    'date' => 'วันที่',
    'employee_shift_id' => 'รหัสกะพนักงาน',
    'hour_of_day' => 'ชั่วโมงของวัน',
    'backup_after_days' => 'สำรองข้อมูลหลังจากผ่านไปหลายวัน',
    'delete_backup_after_days' => 'ลบข้อมูลสำรองหลังจากผ่านไปหลายวัน',
    'credit_note_id' => 'รหัสใบลดหนี้',
    'billing_frequency' => 'ความถี่ในการเรียกเก็บเงิน',
    'billing_interval' => 'ช่วงการเรียกเก็บเงิน',
    'work_from_type' => 'งานจากประเภท',
    'label_name' => 'ชื่อป้ายกำกับ',
    'has_heading' => 'มีส่วนหัว',
    'notAllowed' => 'ไม่อนุญาตให้ใช้ :attribute',
    'effective_after' => 'มีผลบังคับใช้หลังจาก',
  ],
  'selectAtLeastOne' => 'เลือกอย่างน้อยหนึ่งรายการ',
  'notAllowed' => 'ไม่อนุญาตให้ใช้ :attribute',
];
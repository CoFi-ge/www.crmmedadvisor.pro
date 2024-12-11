<?php 
return [
  'maxRetriesToolTip' => 'จำนวนความพยายามที่ล้มเหลวสูงสุดที่อนุญาตก่อนที่จะล็อกเอาต์',
  'extendLockoutToolTip' => 'ขยายเวลาล็อคเอาท์หลังจากล็อคเอาท์ครั้งแรก',
  'emailNotificationToolTip' => 'หลังการล็อก (จำนวนครั้งของการล็อก) 0 เพื่อปิดการแจ้งเตือนทางอีเมล',
  'ipToolTip' => 'ป้อนหนึ่ง IP ต่อบรรทัด',
  'loginExpiry' => 'บัญชีของคุณหมดอายุแล้ว กรุณาติดต่อผู้ดูแลระบบ.',
  'sessionDriverRequired' => 'โปรดตั้งค่าไดรเวอร์เซสชันเป็นฐานข้อมูล มิฉะนั้น คุณลักษณะนี้จะไม่ทำงาน คุณสามารถเปลี่ยนเป็นฐานข้อมูลได้จาก :setting',
  'maxRetries' => 'คุณลองใหม่ถึงจำนวนสูงสุดแล้ว โปรดลองอีกครั้งหลังจาก :time',
  'ipRequired' => 'โปรดป้อนที่อยู่ IP หากคุณต้องการเปิดใช้งานการตรวจสอบ IP',
  'blacklistEmail' => 'อีเมลของคุณอยู่ในบัญชีดำ กรุณาติดต่อผู้ดูแลระบบ.',
  'blacklistIp' => 'IP ของคุณอยู่ในบัญชีดำ กรุณาติดต่อผู้ดูแลระบบ.',
  'infoBox' => [
    'lockoutForMinutes' => 'ผู้ใช้จะถูกล็อคหลังจากพยายามล้มเหลว :maxRetries ครั้งเป็นเวลา :lockoutTime นาที',
    'extendedLockout' => 'เวลาล็อคจะขยายเป็น :extendedLockoutTime ชั่วโมงหลังจากการล็อคครั้งแรก',
    'maxLockoutsAvailable' => 'การล็อกสูงสุดที่อนุญาตคือ :maxLockouts',
    'resetRetries' => 'การลองใหม่จะถูกรีเซ็ตหลังจาก :resetRetries ชั่วโมง',
    'alertAfterLockouts' => 'การแจ้งเตือนทางอีเมลจะถูกส่งหลังจากการล็อก :alertAfterLockouts ถึง :email',
    'sendEmailDifferentIp' => 'ส่งการแจ้งเตือนทางอีเมลหากเข้าสู่ระบบจาก IP ที่แตกต่างกัน :ip',
    'notSendEmailDifferentIp' => 'อย่าส่งการแจ้งเตือนทางอีเมลหากเข้าสู่ระบบจาก IP ที่แตกต่างกัน',
  ],
];
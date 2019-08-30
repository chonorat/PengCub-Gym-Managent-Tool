TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` trigger chk_stats3 before insert on class_registration \n      for each row \n       begin  \n      if  NEW.Guests > (SELECT Guestnumber FROM member WHERE NEW.Member_Number=member.Member_Number) then\n       SIGNAL SQLSTATE \'45000\'   \n       SET MESSAGE_TEXT = \'Cannot add or update row: only\';\n       end if; \n    end' 'CREATE DEFINER=`root`@`localhost` trigger chk_capacity before insert on class_registration \n      for each row \n       begin  \n      if  (SELECT SUM(class_registration.Guests+1) \nFROM class_registration \nWHERE NEW.Section_Number=class_registration.Section_Number)+(New.Guests+1)\n>\n(SELECT Capacity FROM room,section\nWHERE NEW.Section_Number=section.Section_Number\nAND section.Room_Number=room.Room_Number\nAND section.Building=room.Building)  \n   THEN\n       SIGNAL SQLSTATE \'45000\'   \n       SET MESSAGE_TEXT = \'Cannot add or update row: Capacity Exceeded\';\n       end if; \n    end'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='cp850' 'cp850'
connection_cl_names='cp850_general_ci' 'cp850_general_ci'
db_cl_names='latin1_swedish_ci' 'latin1_swedish_ci'
created=156702262687 156702262696

package com.viettel.dao;

import com.viettel.entity.Student;

import java.io.FileWriter;
import java.util.*;

public class StudentDao {
    static private List<Student> ListStudent; //

    public StudentDao() {
       
        ListStudent = new ArrayList<>();
    }

    // Thêm danh sach sinh viên
    public boolean addNewStudent(Student student) {
        ListStudent.add(student);
        System.out.println("Thêm thành công");
        return true;
    }


    // Sưa sv
    public boolean changeStudent(String nameStudent, String genderStudent, int ageStudent, String rankedAcademicStudent, String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                std.setName(nameStudent);
                std.setGender(genderStudent);
                std.setAge(ageStudent);
                std.setRankedAcademic(rankedAcademicStudent);
                return true;
            }
        }
        return false;
    }

    // xóa sv
    public boolean deleteStudent(String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                ListStudent.remove(std);
                return true;
            }
        }
        return false;
    }


    //Lấy sinh viên theo id
    public static Student getStudentById(String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)){
                return std;
            }
        }
        return null;
    }


    // lấy danh sách sinh viên
    public static List<Student>  getListStudent(){
       return ListStudent;
    }

    // kiểm tra Id sinh viên đã tồn tại trong hệ thống hay chưa
    public static boolean checkExitsId(String Id){
        for (Student std : ListStudent){
                if(std.getId().equals(Id)){
                    return true;
                }
        }
        return false;
    }


    // kiểm tra danh sách sv rỗng hay không
    public static boolean isEmptyListStudent(){
        if(ListStudent.isEmpty()){
            return  true;
        }
        return false;
    }
}

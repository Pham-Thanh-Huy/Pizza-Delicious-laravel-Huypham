package com.viettel.dao;

import com.viettel.entity.Student;

import java.io.*;
import java.util.ArrayList;
import java.util.List;

public class StudentDao {
    private List<Student> ListStudent;

    public StudentDao() {
        ListStudent = new ArrayList<>();
    }

    // Thêm danh sách sinh viên
    public boolean addNewStudent(Student student) {
        ListStudent.add(student);
        System.out.println("Thêm thành công");
        return true;
    }

    // Sửa sinh viên
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

    // Xóa sinh viên
    public boolean deleteStudent(String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                ListStudent.remove(std);
                return true;
            }
        }
        return false;
    }

    // Lấy sinh viên theo id
    public Student getStudentById(String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                return std;
            }
        }
        return null;
    }

    // Lấy danh sách sinh viên
    public List<Student> getListStudent() {
        return ListStudent;
    }

    // Kiểm tra Id sinh viên đã tồn tại trong hệ thống hay chưa
    public boolean checkExitsId(String Id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(Id)) {
                return true;
            }
        }
        return false;
    }

    // Kiểm tra danh sách sinh viên rỗng hay không
    public boolean isEmptyListStudent() {
        return ListStudent.isEmpty();
    }

    // Ghi danh sách sinh viên vào file
    public void saveStudentsToFile(String filePath) {
        try (FileWriter writer = new FileWriter(filePath)) {
            for (Student student : ListStudent) {
                writer.write(student.toString() + "\n");
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    // Đọc danh sách sinh viên từ file
    public void loadStudentsFromFile(String filePath) {
        List<Student> students = new ArrayList<>();
        try (BufferedReader reader = new BufferedReader(new FileReader(filePath))) {
            String line;
            while ((line = reader.readLine()) != null) {
                // Parse dòng trong file thành đối tượng Student và thêm vào danh sách
                Student student = Student.parseFromString(line);
                if (student != null) {
                    students.add(student);
                }
            }
        } catch (IOException e) {
            e.printStackTrace();
        }

        ListStudent = students;
    }
}

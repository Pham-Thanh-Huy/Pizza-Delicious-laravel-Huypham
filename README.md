package com.viettel.dao;

import com.viettel.entity.Student;

import java.io.*;
import java.util.ArrayList;
import java.util.List;

public class StudentDao {
    private List<Student> ListStudent;
    private String filePath;

    public StudentDao(String filePath) {
        this.filePath = filePath;
        loadStudentsFromFile(); // Đọc dữ liệu từ file khi khởi tạo đối tượng StudentDao
    }

    // Thêm sinh viên và cập nhật dữ liệu vào file
    public boolean addNewStudent(Student student) {
        ListStudent.add(student);
        saveStudentsToFile();
        System.out.println("Thêm thành công");
        return true;
    }

    // Sửa sinh viên và cập nhật dữ liệu vào file
    public boolean changeStudent(String nameStudent, String genderStudent, int ageStudent, String rankedAcademicStudent, String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                std.setName(nameStudent);
                std.setGender(genderStudent);
                std.setAge(ageStudent);
                std.setRankedAcademic(rankedAcademicStudent);
                saveStudentsToFile();
                return true;
            }
        }
        return false;
    }

    // Xóa sinh viên và cập nhật dữ liệu vào file
    public boolean deleteStudent(String id) {
        Student studentToRemove = null;
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                studentToRemove = std;
                break;
            }
        }
        if (studentToRemove != null) {
            ListStudent.remove(studentToRemove);
            saveStudentsToFile();
            return true;
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
    private void saveStudentsToFile() {
        try (FileWriter writer = new FileWriter(filePath)) {
            for (Student student : ListStudent) {
                writer.write(student.toString() + "\n");
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    // Đọc danh sách sinh viên từ file
    private void loadStudentsFromFile() {
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







public class Student {
    // ...
    
    // Phương thức chuyển đổi từ chuỗi thành đối tượng Student
    public static Student parseFromString(String line) {
        String[] parts = line.split(",");
        if (parts.length == 5) {
            try {
                String id = parts[0].trim();
                String name = parts[1].trim();
                String gender = parts[2].trim();
                int age = Integer.parseInt(parts[3].trim());
                String rankedAcademic = parts[4].trim();

                return new Student(id, name, gender, age, rankedAcademic);
            } catch (NumberFormatException e) {
                e.printStackTrace();
            }
        }
        return null; // Trả về null nếu không thể chuyển đổi dòng thành đối tượng Student
    }
    
    // ...
}


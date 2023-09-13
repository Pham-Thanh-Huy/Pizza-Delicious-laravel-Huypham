package com.viettel.dao;

import com.viettel.entity.Student;

import java.io.*;
import java.util.ArrayList;
import java.util.List;

public class StudentDao {
    private static List<Student> ListStudent;
    private String filePath;

    public StudentDao() {
        filePath = "data.txt"; // Đường dẫn mặc định của file dữ liệu
        ListStudent = new ArrayList<>();
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
    public static   Student getStudentById(String id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(id)) {
                return std;
            }
        }
        return null;
    }

    // Lấy danh sách sinh viên
    public static List<Student> getListStudent() {
        return ListStudent;
    }

    // Kiểm tra Id sinh viên đã tồn tại trong hệ thống hay chưa
    public static boolean checkExitsId(String Id) {
        for (Student std : ListStudent) {
            if (std.getId().equals(Id)) {
                return true;
            }
        }
        return false;
    }

    // Kiểm tra danh sách sinh viên rỗng hay không
    public static boolean isEmptyListStudent() {
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

    // Đọc danh sách sinh viên từ file hoặc tạo mới nếu file không tồn tại
    private void loadStudentsFromFile() {
        List<Student> students = new ArrayList<>();
        File file = new File(filePath);

        if (file.exists()) {
            try (BufferedReader reader = new BufferedReader(new FileReader(file))) {
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
        } else {
            try {
                file.createNewFile(); // Tạo file mới nếu không tồn tại
            } catch (IOException e) {
                e.printStackTrace();
            }
        }

        ListStudent = students;
    }
}

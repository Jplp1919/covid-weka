/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package covid.weka;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author Usuário
 */
public class ConnectionFactory {
    
 private final String DATABASE_URL = "jdbc:mysql://localhost:3306/newmodeldb?useTimezone=true&serverTimezone=UTC";
    static final String USERNAME = "root";
    static final String PASSWORD = "root";
     public ConnectionFactory(){
      

     }
    public Connection establishConnection()  {
        //cria uma conexão com o banco de dados
        
       try {
           return DriverManager.getConnection(DATABASE_URL,
                   USERNAME, PASSWORD);
       } catch (SQLException ex) {
           Logger.getLogger(ConnectionFactory.class.getName()).log(Level.SEVERE, null, ex);
       }
       
      return null;
    }
}

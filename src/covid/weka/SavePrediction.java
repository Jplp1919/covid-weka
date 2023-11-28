
package covid.weka;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.sql.Statement;

public class SavePrediction {
        private Connection con;

    public SavePrediction(Connection con) {
        this.con = con;
    }
    
    
    
    public void save(String prediction, String percentage, int id){
       String sql = "insert into prediction (TemCovid, Porcentagem, idPessoa) values (?, ?, ?);";
       
      try{
          PreparedStatement pstm = con.prepareStatement(sql, Statement.RETURN_GENERATED_KEYS);
          pstm.setString(1, prediction);
           pstm.setString(2, percentage);
           pstm.setInt(3, id);
           pstm.execute();
      } catch (SQLException e){
          System.out.println(e);
      }
        
    }
}

using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class ChangeSizeThermometer : MonoBehaviour
{
   // Specifying when object is dragged
    void OnMouseDown() {
      transform.localScale = new Vector3 (0.2f,0.28f,0);
        }
}


 